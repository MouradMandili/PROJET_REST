<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ajouter un restaurant</title>
</head>
<body>

    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <h1>MONREST@</h1>
                </div>
                
            </div>
    </div>

    <div class="container-fluid d-flex justify-content-center" style="margin-top:200px">
        <div class="row d-flex justify-content-center">
            <div class="col-10 d-flex justify-content-center">
                <h2 style="color:green; margin-bottom:50px;">Veuillez vous inscrire pour profiter de nos offres <span>-50%</span> </h2>
            </div>

            <div class="col-10 d-flex justify-content-center">

                <form class="row g-3 d-flex flex-column" method="post" action="#">

                    <div class="col-md-12">
                        <label for="resto_nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" name="resto_nom" value="">
                    </div>

                    <div class="col-md-12">
                        <label for="resto_addresse" class="form-label">Addresse :</label>
                        <input type="text" class="form-control" name="resto_addresse" value="">
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Type :</label>
                        <input type="text" class="form-control" name="resto_type" value="">
                    </div>

                    <div class="col-md-12">
                        <label for="resto_description" class="form-label">Description :</label>
                        <input type="areatext" class="form-control" name="resto_description"  aria-describedby="inputGroupPrepend2">
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label">Sélectionner une image :</label>
                        <input type="file" class="form-control" name="resto_image">
                    </div>
                
                    <div class="col-12 justify-content-center">
                        <button class="btn btn-success" type="submit">Ajouter</button>
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