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

    public function getPromenades(){
        // Preparation requête
        $pdoStatement = $this->connexion->prepare(
            "SELECT titre, pays, ville, depart, arrivee, codePostal, pseudo, detail, images FROM Promenades"
        );

        // On exécute la requête
        $pdoStatement->execute();

        // On stocke en php le résultat de la requete
        $promenades = $pdoStatement->fetchAll(PDO::FETCH_CLASS, "Promenade");

        // Je stocke la liste des npromenades
        return $promenades;
    }

    // Fonction qui récupère une promenade par son numéro
    public function getPromenadeById($id){
        // Je prépare ma requete
        $pdoStatement = $this->connexion->prepare(
            "SELECT titre, pays, ville, depart, arrivee, codePostal, pseudo, detail, images FROM Promenades
            WHERE id = :promId"
        );

        // J'exécute la requete
        $pdoStatement->execute(
            array("promId" => $id)
        );

        // Je recupere et je stocke le resultat
        $selectPromenade = $pdoStatement->fetchObject("Promenade");
        //var_dump($monChien);
        return $selectPromenade;
    }


} 
?>