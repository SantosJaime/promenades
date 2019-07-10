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
    public function insertPromenade(){

        // Je prépare la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades () VALUES (:nomChien,:ageChien,:raceChien,:idMaitre)"
        );
        
        // J'exécute la requête
        $pdoStatement->execute(array(
            "nomChien" => $nom,
            "ageChien" => $age,
            "raceChien" => $race,
            "idMaitre" => $idMaitre)
        );
        
        // test de la requête
        //var_dump($pdoStatement->errorInfo());

        //Récupération ID crée
        $id = $this->connexion->lastInsertId();
        return $id;
    } 

/*

    
  
    public function insertMaster($nom, $telephone){// Fonction pour insérer nouveau maitre
        
        // Préparation de la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Maitres (nom, telephone) VALUES (:nom,:telephone)"
        );
     
        // Exécution de la requête
        $pdoStatement->execute(array(
            "nom" => $nom,
            "telephone" => $telephone)
        );
        // test de la requête
        //var_dump($pdoStatement->errorInfo());

        //Récupération ID crée
        $id = $this->connexion->lastInsertId();
        return $id;
    }   

    

    
   

    //fonction pour récupérer tous les chiens exo7
    public function getAllDogs(){
        $pdoStatement = $this->connexion->prepare(
            "SELECT id, nom, race FROM Chiens"
        );
        //Execution de la requete
        $pdoStatement->execute();

         //On stocke en php le résultat de la requete
        $chiens = $pdoStatement->fetchALL (PDO::FETCH_CLASS, 'Chien');

        //Je retourne la liste des chiens
        return $chiens;
    }

    //fonction qui récupère chien par ID
    public function getDogById($id){
        $pdoStatement = $this->connexion->prepare(
            "SELECT c.id, c.nom, c.age, c.race, m.nom as nomMaitre, m.telephone
            FROM Chiens c
            INNER JOIN Maitres m
            ON c.id_maitre = m.id
            WHERE c.id = :idChien"
        );
        //exécution de la requète
        $pdoStatement->execute(
            array("idChien" => $id)
        );
        //stockage du résultat de la requête
        $monChien = $pdoStatement->fetchObject('Chien');
        //var_dump ($monChien);
        //var_dump($pdoStatement->errorInfo());
        //retour du résultat
        return $monChien;
    }

    //fonction pour supprimer un chien par ID
    public function delDogById($id){
        $pdoStatement = $this->connexion->prepare(
            "DELETE FROM `Chiens` WHERE id = :idChien"
        );
        //exécution de la requète
        $pdoStatement->execute(
            array ("idChien"=> $id)
            );

        //recuperation code erreur
        $errorcode =$pdoStatement->errorCode();
        if ($errorCode == 0){
        // si OK return true
            return true;
        }else{
        // si ça c'est mal passé return flase
            return false;
        }
    }

    public function updateDog($id, $nom, $age, $race){
        //préparation
        $pdoStatement = $this->connexion->prepare(
            'UPDATE Chiens
            SET nom = :nomChien, age = :ageChien, race = :raceChien
            WHERE id = :idChien'
        );
        //Exécution
        $pdoStatement->execute(
            array(
                "nomChien" => $nom,
                "ageChien" => $age,
                "raceChien" => $race,
                "idChien" => $id
            )
        );
        //recuperation code erreur
        $errorcode =$pdoStatement->errorCode();
        /*if ($errorCode == 0){
        // si OK return true
            return true;
        }else{
        // si ça c'est mal passé return flase
            return false;
        }
    }

    //fonction pour récupérer tous les chiens exo7
    
    
    public function getAllMasters(){
        //preparation de la requete 
        $pdoStatement = $this->connexion->prepare(
            "SELECT * FROM Maitres"
        );
        //Execution de la requete
        $pdoStatement->execute();

         //On stocke en php le résultat de la requete
        $listeMaitres = $pdoStatement->fetchALL (PDO::FETCH_CLASS, 'Maitre');
        //test
        //var_dump($pdoStatement->errorInfo());
        //Je retourne la liste des maitres
        return $listeMaitres;
    }
        //stockage du résultat de la requête
        //$delChien = $pdoStatement->fetchObject('Chien');
        //var_dump ($monChien);
        //var_dump($pdoStatement->errorInfo());
        //retour du résultat
        //return $delChien;
    
}// fin DB*/

?>