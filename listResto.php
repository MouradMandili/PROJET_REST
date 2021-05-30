<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listResto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>LISTE DES RESTAURANTS</title>
</head>
<body>
   
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 ">
                    <h1>MONREST@</h1>
                </div>
            </div>
    </div>

    <div class="container-fluid d-flex justify-content-center" style="margin-top:200px;">
        <div class="row">
            
            <div class="col-12 table">
            <h1 class="d-flex align-items-end justify-content-start"><strong>Liste des restaurants</strong><a class="btn btn-info btn-lg" href="profil.php">Profil</a> <a class="btn btn-success btn-lg" href="verifAdmin.php">Ajouter un Restaurant</a></h1>
                <table class="table table-striped table-bordered" style="margin-top:40px;">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- pour charque element recuperé du fetch affiché la valeur de ses attributs qui correspond  au colonne BDD-->
                        <?= 
                        require_once 'Resto.php'; 
                        require_once 'DAO.php';
                        ?>
                        <?= foreach($restos as $resto): ?>
                            
                            <tr>
                                <td><?= $resto->resto_name?></td>
                                <td><?= $resto->resto_address?></td>
                                <td><?= $resto->resto_type?></td>
                                <td style="width=200;">
                                        <!-- pour que $_GET['id'] puisse récupèrer l'id via url pour la requete de la méthode voirResto -->
                                        <?= echo '<a class="btn btn-info" href="voirResto.php?id="'.$resto->id_resto'>Voir</a>'?>
                                        <?= echo '<a class="btn btn-danger" href="reservResto.php?id="'.$resto->id_resto'>Résever</a>'?>
                                </td>
                            </tr>

                        <?= endforeach ?>    

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>




    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>