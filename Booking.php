<?php

class Booking{
    private $booking_number;
    private $booking_date;
    private $booking_hour;
    private $booking_count;

    public function __construct($booking_number,$booking_date,$booking_hour,$booking_count,$client){
        $this->booking_number = $booking_number;
        $this->booking_date = $booking_date;
        $this->booking_hour = $booking_hour;
        $this->booking_count = $booking_count;
        $this->client = $client;
    }

    public function getBooking_number(){
        return $this->booking_number;
    }

    public function getBooking_date(){
        return $this->booking_date;
    }

    public function booking_hour(){
        return $booking_hour;
    }

    public function booking_count(){
        return $this->$booking_count;
    }

    public function myBooking(){
        echo "j'ai réserver merci";
    }

    public function countBooking($client){
        require_once 'DAO.php';

        $db = DAO::connect();
        $req = $bdd->query("SELECT  COUNT($client) as Nbrbook FROM Booking" );
        $donnees = $req->fetch();
        $req->closeCursor();
        $total= $donnees['Nbrbook'];

        return $total;
    }

    

}

?>