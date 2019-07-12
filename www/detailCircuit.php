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

  <header>
    <!-- Barre de Nav -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
      <img src="Images/80931466-signe-de-démarrage-empreinte-vecteur-icône-blanche-avec-une-ombre-douce-sur-un-fond-transparent-.jpg" width="130" height="130" alt="<a class=" navbar-brand" href="#"><strong>Promenades</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Maison <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create-promenade.php">Ajouter promenade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactez-nous</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Fin Barre de Nav -->
    <div class="view intro-2">
      <div class="full-bg-img">
        <div class="mask rgba-black-light flex-center">
          <div class="container text-center white-text">
            <div class="white-text text-center wow fadeInUp">
              <br>
              <h3>Ce n'est pas la destination qui compte, mais le trajet</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  <body>

    <div class="jumbotron text-center">
      <h1> Vous avez choisi le circuit : <?php echo $promenade->getTitre(); ?> </h1>
    </div>

    <div class="container-fluid ">
      <div class="row">
        <div class="col-sm-6"><img class="img-fluid" src="Images/prom1.jpg" alt="Prom1">
          <h3><?php 
          echo "La promenade : ".echo $promenade->getId()."entre ".echo $promenade->getDepart()."et ".echo $promenade->getArrivee();
          ?></h3>

        </div>
      </div>
    </div>



  

  </body>


</html>