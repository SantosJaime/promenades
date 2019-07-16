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
                    <a class="nav-link active" href="create-promenade.php"><strong>Ajouter promenade </strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>Contactez-nous </strong></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin Barre de Nav -->



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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>