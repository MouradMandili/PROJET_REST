<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>ACCUEIL</title>
</head>
<body>

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 ">
                    <h1>MONREST@</h1>
                </div>
                <div class="col-10 ">
                    <h2>Veuillez vous s'inscrire pour reserver </h2>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10 ">
            <form class="row g-3 d-flex flex-column" method="post" action="user.php">
                <div class="col-md-4">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value="" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">email</label>
                    <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" name="email"  aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">mot de passe</label>
                    <input type="text" class="form-control" name="mdp" required>
                </div>
            
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Acceptez nos conditions générales d'utilisation
                    </label>
                    </div>
                </div>
                <div class="col-12 justify-content-center">
                    <button class="btn btn-primary" type="submit">S'inscrire</button>
                </div>
                </form>
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>