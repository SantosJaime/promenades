<?php
//import fichier database
require_once "Database.php";
//instanciation de la class database
$database= new Database();
?>  

<html>
    <head>
        <title>Projet Promenade</title>
    </head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width, initialscale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <header>
        <!-- Barre de Nav -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
                <img src="Images/80931466-signe-de-démarrage-empreinte-vecteur-icône-blanche-avec-une-ombre-douce-sur-un-fond-transparent-.jpg"
                width="130" height="130" alt="" <a class="navbar-brand" href="#"><strong>Promenades</strong></a>
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
    
    <section id="cover">
        <div id="cover-caption">
            <div id="container" class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center formProm">
                        <h2><b> Création d'une promenade </b></h2>
                        <form action="process-create.php" method="post">
                            <label for="titre">Titre </label>
                                <input type="text" id="titre" name="titre" placeholder ="Nom">
                                <br>
                            <label for="titre">Pays </label>
                                <input type="text" id="pays" name="pays" placeholder ="Suisse"> 
                                <br>
                            <label for="ville">Ville</label>
                                <input type="text" id="ville" name="ville" placeholder ="Genève">
                                <br>
                            <label for="depart">Départ</label>
                                <input type="text" id="depart" name="depart" placeholder ="lieu de départ">
                                <br>
                            <label for="arrivee">Arrivée</label>
                                <input type="text" id="arrivee" name="arrivee" placeholder ="lieu d'arrivée">
                                <br>
                            <label for="codePostal">Code postal </label>
                                <input type="number" id="codePostal" name="codePostal" placeholder ="1227">
                                <br>
                            <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" name="pseudo" placeholder ="Auteur">
                                <br>
                            <label for="detail">Description </label>
                                <textarea type="text" id="detail" name="detail" rows="3" placeholder ="Description de la ballade" class="form-control md-textarea"></textarea>
                                <br>
                                <label for="images">Image</label>
                                <input type="file" id="images" name="images" placeholder ="Insérer une image">
                                <br>
                                <br>
                            <button type="submit" class="btn btn-dark">Enregistrez !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>