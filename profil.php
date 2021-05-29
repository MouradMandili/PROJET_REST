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
             
                <div class="col-md-4">
                    <h3>Nom:</h3>
                    <p><?php echo $nomError?></p>
                </div>
                </div>

                <div class="col-md-6 d-flex">
                    <h3>Prénom:</h3>
                    <p>Mourad</p>
                </div>
            
                <div class="col-12 justify-content-center">
                    <button class="btn btn-primary" type="submit">Ajouter un Restaurant</button>
                </div>

            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>