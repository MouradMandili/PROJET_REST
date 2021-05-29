<?php

require 'DAO.php';

    $nomError = $prenomError = $pwError = $emailError = $nom = $prenom = $pw = $email = "";

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $pw = $_POST["mdp"];


    $db = DAO::connect();
    $requete = "INSERT INTO Client (nom_client, prenom_client, email, mdp) VALUES (:nom_client, :prenom_client, :email, :mdp);";
    $maRequet = $db->prepare($requete);
    $maRequet->bindParam(':nom_client', $nom);
    $maRequet->bindParam(':prenom_client', $prenom);
    $maRequet->bindParam(':email', $email);
    $maRequet->bindParam(':mdp', $pw);
    $maRequet->execute();
    header("Location: connect.php");

    // if(!empty($_POST))
    // {
    //     $nom = $_POST["nom"];
    //     $prenom = $_POST["prenom"];
    //     $email = $_POST["email"];
    //     $pw = $_POST["mdp"];
        

    //     $cBon = true;
    
    //     if(empty($nom))
    //     {
    //         $nomError = 'Il me faut un nom mec !!!';
    //         $cBon = false;
    //     }

    //     if(empty($prenom))
    //     {
    //         $prenomError = 'ce champ est obligatoire m enerve paaaas!';
    //         $cBon = false;
    //     }

    //     if(empty($email))
    //     {
    //         $emailError = 'Aller file moi ton email';
    //         $cBon = false;
    //     }

    //     if(empty($pw))
    //     {
    //         $pwError = 'Celà est agassant, un mot de passe Bordeeeeeel';
    //         $cBon = false;
    //     }
    
    //     if($cBon)
    //     {
    //         $db = DAO::connect();
    //         $requete = "INSERT INTO Client (nom_client, prenom_client, email, mdp) VALUES (:nom_client, :prenom_client, :email, :mdp);";
    //         $maRequet = $db->prepare($requete);
    //         $maRequet->bindParam(':nom_client', $nom);
    //         $maRequet->bindParam(':prenom_client', $prenom);
    //         $maRequet->bindParam(':email', $email);
    //         $maRequet->bindParam(':mdp', $pw);
    //         $maRequet->execute();
    //         header("Location: connect.php");
    //     } 

    // }

?>