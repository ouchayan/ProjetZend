<?php

class Application_Model_Administrateur
{
    protected $idadministrateur;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $motpasse;
    protected $date;
    
    function __construct($idadministrateur, $nom, $prenom, $email, $motpasse, $date) {
        $this->idadministrateur = $idadministrateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motpasse = $motpasse;
        $this->date = $date;
    }
    
    public function getIdadministrateur() {
        return $this->idadministrateur;
    }

    public function setIdadministrateur($idadministrateur) {
        $this->idadministrateur = $idadministrateur;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMotpasse() {
        return $this->motpasse;
    }

    public function setMotpasse($motpasse) {
        $this->motpasse = $motpasse;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

}

