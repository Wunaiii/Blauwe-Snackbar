<?php
include 'database.php';

?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Registreren</h1> <br>
        <form class="row g-3" action="gebruiker-maak-verwerk.php" method="post">
            <div class="col-md-6">
                <label for="firstname">firstname</label>
                <input type="text" class="form-control" placeholder="Voer uw firstname in" name="firstname" required>
            </div>
            <div class="col-md-6">
                <label for="lastname">lastname</label>
                <input type="text" class="form-control" placeholder="Voer uw lastname in" name="lastname" required>
            </div>
            <div class="col-md-6">
                <label for="Email">email</label>
                <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="password">password</label>
                <input type="password" class="form-control" placeholder="password" name="password" required>
            </div>
            <div class="col-md-8">
                <label for="phonenumber">phonenumber</label>
                <input type="text" class="form-control" placeholder="Voer uw phonenumber in" name="phonenumber" required>
            </div>
        <br> <button type="submit" class="btn btn-primary">Create/button>
        </form>
        </div>
    </body>
</html>