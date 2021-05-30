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

    //s'inscrire
    public function registerClient(){
    require_once 'DAO.php';
    // se connecte
    $db = DAO::connect();
    //la requete 
    $requete = "INSERT INTO Client (nom_client, prenom_client, email, mdp) VALUES (:nom_client, :prenom_client, :email, :mdp);";
    //on prepare la requete 
    $maRequet = $db->prepare($requete);
    //relie les variable avec les element en attente pour la requete
    $maRequet->bindParam(':nom_client', $nom);
    $maRequet->bindParam(':prenom_client', $prenom);
    $maRequet->bindParam(':email', $email);
    $maRequet->bindParam(':mdp', $pw);
    //excute la requete
    $maRequet->execute();
    // on redirige l'utilisateur pour saisir ses id mdp sur la page connexion
    header("Location: connect.php");
    }


    //se connecter
    public function connectClient($email,$wp){
    require_once 'DAO.php'
    $db = DAO::connect();
    // chercher tout les utilisateur qui on les mail et mdp recuperé au post
    $requete = "SELECT * FROM Client WHERE email='$email' AND mdp='$pw'";
    //preparer la requete
    $maRequet = $db->prepare($requete);
    // excuter la requete
    $maRequet->execute();
    // stocker le resultat dans une variable
    $result = $maRequet->fetchAll();

        //si la requet est vide personne n'est inscrit avec les id et mdp saisir
        if(empty($result))
        {
            echo "mdp email incorrect";
        }
        else
        {
            //sinon on a trouver qlq qui correspond on le redirige vers la page profil
            header("Location: profil.php");
        }

    }

}



?>