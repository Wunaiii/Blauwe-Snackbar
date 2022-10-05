<?php
include 'database.php';
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Categorie maken</h1> <br>
        <form class="row g-3" action="categorie-maak-verwerk.php" method="post">
            <div class="col-md-12">
                <label for="Naam">name of the product</label>
                <input type="text" class="form-control" placeholder="Voer de naam van de categorie in" name="naam" required>
            </div>
            <div class="col-md-12">
                <label for="Beschrijving">costprice</label>
                <input type="text" class="form-control" placeholder="Voer beschrijving van de categorie in" name="beschrijving" required>
            </div>
            <div class="col-md-12">
                <label for="Beschrijving">selling_price</label>
                <input type="text" class="form-control" placeholder="Voer beschrijving van de categorie in" name="beschrijving" required>
            </div>
            <div class="col-md-12">
                <label for="Beschrijving">category</label>
                <input type="text" class="form-control" placeholder="Voer beschrijving van de categorie in" name="beschrijving" required>
            </div>
        <br> <button type="submit" class="btn btn-primary">Make</button>
        </form>
        </div>
    </body>
</html>