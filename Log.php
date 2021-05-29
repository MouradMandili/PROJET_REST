<?php
    require_once 'DAO.php';
    require_once 'Client.php';
    require_once 'Booking.php';


    $client1 = new Client('Mourad','Mandili','tpa.nord@gmail.com','123','true');
    $reservation1 = new Booking('xxx','20/08/2021','8:00',2,$client1);
    $client = $client1->getNom_client();
    // Total des reservation a afficher sur le profil Client
    $count = $reservation1->countBooking($client);



    

?>