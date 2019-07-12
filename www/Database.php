<?php

require_once "Promenade.php";


Class Database {
    private $connexion;
    
    public function __construct(){

        $PARAM_hote="mariadb";// chemin vers le serveur
        $PARAM_port="3306";// port de connexion DB
        $PARAM_nom_bd="AnnuaireCircuits";// Nom DB
        $PARAM_utilisateur="adminCircuit";//nom utilisateur connexion
        $PARAM_mot_passe="1mzeB0ss";//mot de passe connexion

        try{
            $con = 'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd;
            $this->connexion = new PDO($con,$PARAM_utilisateur, $PARAM_mot_passe);
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage()."<br />";
            echo "N° : ".$e->getCode();
        }
    }

    public function getConnexion(){
        return $this->connexion;
    }

    //Fonction pour insérer nouvelle promenade
    public function insertPromenade($titre, $pays, $ville, $depart, $arrivee, $codePostal, $pseudo, $detail, $images){

        // Je prépare la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades (titre, pays, ville, depart, arrivee, codePostal, pseudo, detail, images) 
            VALUES (:promTitre,:promPays,:promVille,:promDepart,:promArrivee,:promCodePostal,:promPseudo,:promDetail,:promImages)"
        );
         
        // J'exécute la requête
        $pdoStatement->execute(array(
            "promTitre" => $titre,
            "promPays" => $pays,
            "promVille" => $ville,
            "promDepart" => $depart,
            "promArrivee" => $arrivee,
            "promCodePostal" => $codePostal,
            "promPseudo" => $pseudo,
            "promDetail" => $detail,
            "promImages" => $images)
        );
        
        // test de la requête
        //var_dump($pdoStatement->errorInfo());

        //Récupération ID crée
        $id = $this->connexion->lastInsertId();
        return $id;
    } 
} 
?>