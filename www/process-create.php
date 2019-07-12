<?php
//PAGE INTERMEDIAIRE => QUE DU PHP
//import database
require_once ("Database.php");
//création connexion
$database = new Database();

//récupérer infos du formulaire avec $_POST

//appeler la fonction insertDog en passant infos du formulaire
$insertPromenade = $Database->insertPromenade(
    $_POST['titre'],
    $_POST['pays'],
    $_POST['ville'],
    $_POST['depart'],
    $_POST['arrivee'],
    $_POST['codePostal'],
    $_POST['pseudo'],
    $_POST['detail'],
    $_POST['images']);
//récupérer le nouvel id de la promenade

//Rediriger l'utilisateur vers la page de la promenade crée
header("Location: detailCircuit.php?id=$insertPromenade");

?>