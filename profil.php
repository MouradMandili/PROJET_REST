<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PROFIL</title>
</head>
<body>

    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <h1>MONREST@</h1>
                </div>
            </div>
    </div>

    <div class="container" style="margin-top:150px;">
        <div class="row">

            <div class="col-10" style="margin-bottom:50px;">
                <h2>MON COMPTE </h2>
            </div>

            <div class="col-10 ">
                <?= require_once 'DAO.php';
                    require_once 'Client.php';
                    require_once 'Booking';
                    require_once 'verif';
                    
                    $reservation =new Reservation('','','','',$client,'')
                ?>
                <div class="col-md-4">
                    <h3>Nom :</h3><span><?php echo $client->nom_client?></span>
                </div>

                <div class="col-md-6 d-flex">
                    <h3>Prénom :</h3><span><?php echo $client->prenom_client?></span>
                </div>
                <!-- objet reservation prend en parametre l'objet client pour recuperer le nombre de reservation par client -->
                <div class="col-md-6 d-flex">
                    <h3>Nombre de réservation :</h3><span><?php echo $reservation->countBooking($reservation->client->id_client)?></span>
                </div>
                
                            
                <div class="col-12 justify-content-center mb-1" style="margin-top:30px;"> 
                   <a href="listResto.php"><button class="btn btn-success" type="submit">la liste des resrtaurants</button></a> 
                </div>

            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>