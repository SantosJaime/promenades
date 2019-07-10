<?php

Class Promenade{

    //Atributs specifiques
    private $id;
    private $titre;
    private $pays;
    private $ville;
    private $depart;
    private $arrivee;
    private $codePostal;
    private $pseudo;
    private $detail;
    private $images;

    //Constructeur par défaut

    //Fonctions
    public function __set($name, $value){}
    public function getId (){
        return $this->id;
    }
    public function getTitre (){
        return $this->titre;
    }
    public function getPays (){
        return $this->pays;
    }
    public function getVille (){
        return $this->ville;
    }
    public function getDepart (){
        return $this->depart;
    }
    public function getArrivee (){
        return $this->arrivee;
    }
    public function getCodePostal (){
        return $this->codePostal;
    }
    public function getPseudo (){
        return $this->pseudo;
    }
    public function getDetail (){
        return $this->adetail;
    }
    public function getImages (){
        return $this->images;
    }

}

?>