<?php

require_once 'DAO.php';
require_once 'Booking.php';

    $nomError = $prenomError = $pwError = $emailError = $nom = $prenom = $pw = $email = "";
    //recuper les elements du formulaires
    $res_heure = $_POST["res_heure"];
    $res_date = $_POST["res_date"];

    // se connecte
    //creer un objet de la class Client recupere les poste et appel la méthode pour s'inscrire
    $reservation = new Booking($res_date, $res_heure, $client->id_client, $client->id_resto);
    $reservation->registerReservation();
?>