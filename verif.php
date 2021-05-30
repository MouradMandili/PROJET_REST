<?php
require_once 'DAO.php';
require_once 'Client.php';


$pw = $email = "";

$email = $_POST["email"];
$pw = $_POST["mdp"];
//  se connecter à la base de donnée
$client = new Client('', '', $email, $mdp);
$client->connectClient($email,$wp);

?>