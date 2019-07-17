<?php
// Import de la databse
require_once("Database.php");
// Création de la connexion
$database = new Database();
// Récupérer l'id depuis l'url
$id = $_GET["id"];
//var_dump($id);
// Récupération de la liste de chiens
$promenade = $database->getPromenadeById($id);
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

    <div class="jumbotron text-center">
      <h4> Vous avez choisi le circuit : <?php echo $promenade->getTitre(); ?> </h4>
    </div>

    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-6"> <img class="img-fluid" src=<?php echo $Promenade->getImages(); ?>>
        </div>
        
        <div class="col-md-4">
          <h5><?php 
          echo "La promenade : ". $promenade->getId()."au départ de ".$promenade->getDepart(). " et à destination de ".$promenade->getArrivee();
          ?><br>
          <b>Auteur : </b><?php echo $promenade->getPseudo();?>
          <br>
          <b>Pays : </b><?php echo $promenade->getPays();?>
          <br>
          <b>Ville : </b><?php echo $promenade->getVille();?>
          <br>
          <b>Code postal : </b><?php echo $promenade->getCodePostal();?>
          <br>
          <b>Détail du circuit : </b><?php echo $promenade->getDetail();?>
          </h5>
        </div>        
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>


</html>