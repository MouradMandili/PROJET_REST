<?php
require 'DAO.php';

$pw = $email = "";

$email = $_POST["email"];
$pw = $_POST["mdp"];
//  se connecter à la base de donnée
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

?>