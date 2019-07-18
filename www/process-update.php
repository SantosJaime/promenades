<?php

// PAGE INTEEMRDIERE => QUE PHP


// recuperer les infos du formaulaire avec $_POST

$id = $_POST["id"];
$titre = $_POST["titre"];
$pays = $_POST["pays"];
$ville = $_POST["ville"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$codePostal = $_POST["codePostal"];
$pseudo = $_POST["pseudo"];
$detail = $_POST["detail"];
$images = $_POST["images"];

// Importer et instancier une database
require_once("Database.php");

//instatnciation de la classe Database
$database = new Database();

// appeler la fonction updateChien en lui passnt les infos du formaulaire
// ($id, $titre, $pays, $ville, $depart, $arrivee, $codePostal, $pseudo, $detail, $images)

$database->updatePromenade($id, $titre, $pays, $ville, $depart, $arrivee, $codePostal, $pseudo, $detail, $images);

// rediriger l'utlisateur vers la page de profil du chien
header('Location: promenade.php?id='.$id);
