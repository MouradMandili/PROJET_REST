<?php
require 'DAO.php';

$pw = $email = "";

$email = $_POST["email"];
$pw = $_POST["mdp"];

$db = DAO::connect();
$requete = "SELECT * FROM Client WHERE email='$email' AND mdp='$pw'";
$maRequet = $db->prepare($requete);
$maRequet->execute();
$result = $maRequet->fetchAll();

echo "<pre>";
var_dump($result);
echo "</pre>";

    if(empty($result))
    {
        echo "mdp email incorrect";
    }
    else
    {
        header("Location: profil.php");
    }

?>