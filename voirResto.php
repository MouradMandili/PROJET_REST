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

            <div class="col-6" style="margin-bottom:50px;">
                <img class="" src="" alt="image_resto">
            </div>

            <div class="col-6">
                
                <div class="col-md-4">
                    <h3>Description :</h3><span><?php echo $description?></span>
                </div>
                            
                <div class="col-12 justify-content-center mb-1" style="margin-top:30px;"> 
                   <a href="listResto.php" class="btn btn-success">Retour à la liste des resrtaurants</a> 
                </div>

            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>