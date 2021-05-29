<?php
    require 'DAO.php';

    $nom = $prenom = $pw = $email = "";

    $email = $_POST["email"];
    $pw = $_POST["mdp"];

    $db = DAO::connect();
    $requete = "SELECT * FROM Client WHERE email='$email' AND mdp='$pw'";
    $maRequet = $db->prepare($requete);
    $maRequet->execute();
    $result = $maRequet->fetchAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PROFIL</title>
</head>
<body>
    <?php var_dump($result);
           echo $result;  ?>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 ">
                    <h1>MONREST@</h1>
                </div>
                <div class="col-10 ">
                    <h2>MON COMPTE </h2>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10 ">
                <?php 
                
                ?>
                <div class="col-md-4">
                    <h3>Nom:</h3>
                    <p><?php echo $nom?></p>
                </div>

                <div class="col-md-6 d-flex">
                    <h3>Prénom:</h3>
                    <p><?php echo $prénom?></p>
                </div>

                <div class="col-md-6 d-flex">
                    <h3>email:</h3>
                    <p><?php echo $email?></p>
                </div>
                
                <div class="col-md-6 d-flex">
                    <h3>mot de passe:</h3>
                    <p><?php echo $pw?></p>
                </div>

                <div class="col-12 justify-content-center">
                    <button class="btn btn-primary" type="submit">Ajouter un Restaurant</button>
                </div>
                
                <div class="col-12 justify-content-center">
                    <button class="btn btn-primary" type="submit">Voir la liste des resrtaurants</button>
                </div>

            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>