<?php
//import database
require_once ("Database.php");
//création connexion
$database = new Database();
//récupàration liste des chiens
$listeProm = $database->getPromenades();

?>
<html>

  <head>
    <title>Projet Promenade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initialscale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <header>
      <!-- Barre de Nav -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
              <img src="Images/stepAndRepeat.png"
              width="150" height="130" alt="" <a class="navbar-brand" href="#"><strong>Promenades</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
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
      <h1>Nos Circuits </h1>
      <p>Explorez-les ! </p>
    </div>

    <div class="container-fluid indexListe">
      <div class="row">
        <?php foreach ($listeProm as $Promenade){ ?>
       
          <div class="col-sm-5 ">
            <a href="detailCircuit.php?id=<?php echo $Promenade->getId();?>"><img class="img-fluid" src="Images/prom1.jpg"  alt="Prom1"></a>     
            <h4><?php echo "Promenade " .$Promenade->getTitre();?></h4>
            <?php echo "Auteur : ".$Promenade->getPseudo()." | ".$Promenade->getPays()."/".$Promenade->getVille(); ?>
          </div>                                  
        <?php } ?>      
      </div>
    </div>

    <footer>
    </footer>
  </body>


</html>