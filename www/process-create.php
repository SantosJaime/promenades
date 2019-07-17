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
//$images = $_POST['images'];

//if (isset($_POST["submit"])){
$file = $_FILES["images"];                         //fichier de variable superglobal avec le name de l'input image 
//print_r($file);
$fileName = $_FILES["images"]["name"];              //instentie le fichier nom superglobal
$fileTmpName = $_FILES["images"]["tmp_name"];
$fileSize = $_FILES["images"]["size"];
$fileError = $_FILES["images"]["error"];
$fileType = $_FILES["images"]["type"];
//explose l'URL par le .jpg
$fileExt = explode(".", $fileName);
//force l'extention jpg en minuscule           
$fileActualExt = strtolower(end($fileExt));       

$allowed = array("jpg", "jpeg", "png"); 

$fileDestination = "";
//fichier autorisé
//si l'extention est vraie
if(in_array($fileActualExt, $allowed)){
        //si il n'y a pas d'erreur            
    if($fileError === 0){     
            //si la taille est de la bonne taille                    
        if($fileSize < 50000000){                   
            //créer un nom unique
            $fileNameNew = uniqid("", true).".".$fileActualExt; 
            //l'image renommée dansdossier de destination
            $fileDestination = "upload/".$fileNameNew; 
            //prendre dans le fichier temporaire et le pousser dans la destination 
            move_uploaded_file($fileTmpName, $fileDestination); 
        //si c'est + que la taille souhaitée
        } else {echo "votre image est trop lourde";} 
        //si l'image n'a pas pu être téléchargée
    } else {echo "erreur de téléchargement";} 
//si l'extention est fausse       
} else{echo "vous ne pouvez pas télécharger ce format : $fileActualExt";}
//}//fin de la première condition 

//import database
require_once ("Database.php");
//création connexion
$database = new Database();

//récupérer le nouvel id de la promenade
$nouvelId = $database->insertPromenade($titre, $pays, $ville, $depart, $arrivee, $codePostal, $pseudo, $detail, $fileDestination);
//var_dump($nouvelId);
//Rediriger l'utilisateur vers la page de la promenade crée
header("Location: detailCircuit.php?id=".$nouvelId);



?>  