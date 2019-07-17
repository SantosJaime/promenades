<?php

require_once("Database.php");
// require_once("create-promenade.php");
// creation de la connexion 
$database = new Database();

//recuperer l'id depuis l'url
$id = $_GET["id"];
// Récupération del liste des promenades
$Listepromenades = $database->getPromenades();
?>
<html>
    <header>

    </header>
    <body>
        
            <h1>Liste des Circuits</h1>
            <h2>Notre annuaire </h2>

            <ul>
                <?php foreach($Listepromenades as $prom){ ?>
                <li>
                <?php echo "<a href=Promenade.php?id=".$prom->getId().">";
                        echo "Le circuit, ".$prom->getTitre()
                                                ." nr. ".$prom->getId(), " de la liste, "
                                                ." est en ".$prom->getPays()
                                                .", dans la ville de ".$prom->getVille(); 
                    echo "</a>"
                ?>
                    
                </li>
                <?php } ?>
            </ul>   
        
      
        <h3><a href="updatepromenade.php?id=<?php echo $prom->getId();?>"> Mettre à jour la liste </a></h3> 
     
    </body>
    </html>
            