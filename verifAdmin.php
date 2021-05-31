<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connect.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <h1>MONREST@</h1>
                </div>
            </div>
    </div>

    <div class="container" style="margin-top:200px;">
        <div class="row">

            <div class="col-10 ">
            <form class="row g-3 d-flex flex-column" method="post" action="verifAd.php">
             
                <div class="col-md-6">
                    <label for="validationDefaultUsername" class="form-label">email</label>
                    <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" name="emailAd"  aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">mot de passe</label>
                    <input type="text" class="form-control" name="mdpAd" required>
                </div>
            
                <div class="col-12 justify-content-center">
                    <button class="btn btn-success" type="submit">se connecter</button>
                </div>
                
                <div class="col-12 justify-content-center">
                        <a class="btn btn-success" href="listResto.php">retour à la liste</a>
                </div>
                </form>
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>