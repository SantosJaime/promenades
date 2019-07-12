<?php
//PAGE INTERMEDIAIRE => QUE DU PHP
//récupérer infos du formulaire avec $_POST
$titre =   $_POST['titre'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];
$codePostal = $_POST['codePostal'];
$pseudo = $_POST['pseudo'];
$detail = $_POST['detail'];
$images = $_POST['images'];

//import database
require_once ("Database.php");
//création connexion
$database = new Database();

//récupérer le nouvel id de la promenade
$nouvelId = $database->insertPromenade($titre, $pays, $ville, $depart, $arrivee, $codePostal, $pseudo, $detail, $images);
//Rediriger l'utilisateur vers la page de la promenade crée
header("Location: detailCircuit.php?id=".$nouvelId);



?>