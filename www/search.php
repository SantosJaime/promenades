<?php
        // Import de la databse
        require_once("Database.php");
        // Création de la connexion
        $database = new Database();
        //utiliser la valeur GET
        $search = $_GET['search'];       
        //Defini carcteres min pour search 
        $min_length = 3; 
        //change les caractères spéciaux en html. Exemple: < to &gt;       
        $search = htmlspecialchars($search); 
        //var_dump($search);
        // Récupération de la 
        $promenadeList = $database->searchPromenade($search);
        // si la search est égale ou supérieure à la longeur minimale
            //if(strlen($search) >= $min_length){
            // affiche résultats obtenus                
    ?> 
<html>
  <head>
    <title>Projet Promenade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initialscale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    <!-- Barre de Nav -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
            <img src="Images/stepAndRepeat.png"
            width="150" height="130" alt="" <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><strong>Maison </strong><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create-promenade.php"><strong>Ajouter promenade </strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Listepromenades.php"><strong>Liste des circuits</strong></a>
                </li>
            </ul>
            <div class="d-flex justify-content-between">
              <form action="search.php" method="GET">
                <input type="text" name="search" />
                <input type="submit" value="search" />
              </form>
            </div>  
        </div>
    </nav>
    <!-- Fin Barre de Nav --> 
    <body> 
      
    <div class="jumbotron text-center">
      <h3>Resultat de la recherche: </h3>
      <h5>Explorez-les ! </h5>
    </div>

        <div class="container-fluid ">
            <div class="row align-items-center">
                <?php foreach ($promenadeList as $promenade){ ?>
                <div class="col-md-5 indexSearch">
                    <a href="detailCircuit.php?id=<?php echo $promenade->getId();?>"><img class="img-fluid" src=<?php echo $promenade->getImages();?>></a>     
                    <h4><?php echo "Circuit : " .$promenade->getTitre();?></h4>
                    <?php echo "Auteur : ".$promenade->getPseudo()." | ".$promenade->getPays()."/".$promenade->getVille(); ?>
                </div>                                  
                <?php } ?>
            </div>
        </div>        
    </body>
</html>