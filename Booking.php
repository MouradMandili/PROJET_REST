<?php

class Booking{

    private $booking_date;
    private $booking_hour;
    private $booking_count;

    public function __construct($booking_date,$booking_hour,$booking_count,$client,$resto){
        $this->booking_date = $booking_date;
        $this->booking_hour = $booking_hour;
        $this->booking_count = $booking_count;
        $this->client = $client;
        $this->resto = $resto;
    }

    public function getBooking_date(){
        return $this->booking_date;
    }

    public function getBooking_hour(){
        return $this->$booking_hour;
    }

    // retourne le nombre de reservation par client
    public function countBooking($client){
        require_once 'DAO.php';

        $db = DAO::connect();
        $req = $bdd->query("SELECT  COUNT($client) as Nbrbook FROM Booking" );
        $donnees = $req->fetch();
        $req->closeCursor();
        $total= $donnees['Nbrbook'];

        return $total;
    }

    //reserver un resto
    public function registerReservation(){
        require_once 'DAO.php';
        // se connecte
        $db = DAO::connect();
        //la requete 
        $requete = "INSERT INTO Booking (date_res, heure_res, id_client, id_resto) VALUES (:date_res, :heure_res, :id_client, :id_resto);";
        //on prepare la requete 
        $maRequet = $db->prepare($requete);
        //relie les variable avec les element en attente pour la requete
        $maRequet->bindParam(':date_res', $this->getBooking_date());
        $maRequet->bindParam(':heure_res', $this->getBooking_hour());
        $maRequet->bindParam(':id_client', $this->client->id_client);
        $maRequet->bindParam(':id_resto', $this->resto->id_resto);
        //excute la requete
        $maRequet->execute();
        DAO::disconnect;
    }

    

}

?>