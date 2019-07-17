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
                      <a class="nav-link" href="#"><strong>Contactez-nous </strong></a>
                  </li>
              </ul>
          </div>
      </nav>
      <!-- Fin Barre de Nav -->
       
    <body>

    <div class="jumbotron text-center">
      <h3>Ce n'est point la destination qui compte, mais le trajet !</h3>
      <h5>Explorez-les ! </h5>
    </div>

    <div class="container-fluid ">
      <div class=" presentation row align-items-center">
        <?php foreach ($listeProm as $Promenade){ ?>
          <div class="col-md-5 indexListe">
            <a href="detailCircuit.php?id=<?php echo $Promenade->getId();?>"><img class="img-fluid" src=<?php echo $Promenade->getImages();?>></a>     
            <h4><?php echo "Promenade " .$Promenade->getTitre();?></h4>
            <?php echo "Auteur : ".$Promenade->getPseudo()." | ".$Promenade->getPays()."/".$Promenade->getVille(); ?>
          </div>                                  
        <?php } ?>      
      </div>
    </div>


    <footer>
      <br>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>


</html>