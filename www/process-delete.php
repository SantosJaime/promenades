<?php

require_once("Database.php");
// creation de la connexion 
$database = new Database();
//recuperer l'id depuis l'url
$id = $_GET["id"];

// JE recupere 
$resultat = $database->deletePromenades($id);
if($resultat == true){
    // Si la suppression a fonctionné je redirige vers la liste des chiens 
    // php url redirection
    header('Location: Listepromenades.php');
}else{
    // Si ça n'a pas fonctionné afficher un message
    echo "Suppression impossible";
}
?>