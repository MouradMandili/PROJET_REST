<?php 

require_once "Resto.php";
require_once "DAO.php";
// recupere les post du fichier ajoutResto pour les envoyer dans la BDD
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $picture = $_POST['picture'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $resto = new Resto($name, $address, $picture, $type, $description);

    $resto->envoisDonnees();



}
    // require_once 'DAO.php';
    // require_once 'Client.php';
    // require_once 'Booking.php';


    // $client1 = new Client('Mourad','Mandili','tpa.nord@gmail.com','123','true');
    // $reservation1 = new Booking('xxx','20/08/2021','8:00',2,$client1);
    // $client = $client1->getNom_client();
    // // Total des reservation a afficher sur le profil Client
    // $count = $reservation1->countBooking($client);


?>