<?php

class Client{
    
    private $nom_client;
    private $prenom_client;
    private $email;
    private $mdp;

    public function __construct($nom_client, $prenom_client, $email, $mdp){
        $this->nom_client = $nom_client;
        $this->prenom_client = $prenom_client;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function getNom_client(){
        return $this->nom_client;
    }

    public function getPrenom_client(){
        return $this->prenom_client;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getMdp(){
        return $this->mdp;
    }

    public function mePresent(){
        echo "je m'appele ".$this->getNom_client(); 
    }

}



?>