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

    <body>
        <div class="formulaire">
            <h2> Création d'une nouvelle promenade </h2>
            <form action="process-create.php" method="post">
                <label for="titre">Titre </label>
                <input type="text" id="pays" name="pays" placeholder ="Suisse"> 
                <label for="ville">Ville</label>
                <input type="text" id="ville" name="ville" placeholder ="Genève">
                <label for="depart">Départ</label>
                <input type="text" id="depart" name="depart" placeholder ="lieu de départ">
                <label for="arrivee">Arrivée</label>
                <input type="text" id="arrivee" name="arrivee" placeholder ="lieu d'arrivée">
                <label for="codePostal">Code postal </label>
                <input type="number" id="codePostal" name="codePostal" placeholder ="1227">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" placeholder ="Auteur">
                <label for="detail">Description </label>
                <input type="text" id="detail" name="detail" placeholder ="Description de la ballade">
                <label for="images">Image</label>
                <input type="file" id="images" name="images" placeholder ="Insérer une image">
            </form>
        </div>  
    </body>
</html>