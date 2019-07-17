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
<head>
    <title>Projet Promenade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initialscale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>


        <!-- Barre de Nav -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <img src="Images/stepAndRepeat.png"width="150" height="130" alt="" <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><strong>Maison </strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create-promenade.php"><strong>Ajouter promenade </strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Contactez-nous </strong></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin Barre de Nav -->
    <body>
        <div class="liste container-fluid ">
            <div class="row align-items-center">
                <div class="col-md-12">    
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
                </div>   
            </div>
        </div>
    
     
    </body>
    </html>
            