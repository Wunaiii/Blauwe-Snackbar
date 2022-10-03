<?php
include 'database.php'; 

if (isset($_POST['submit']) && $_POST['email'] != '' && $_POST['wachtwoord'] != '') {

    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM gebruikers WHERE email ='$email' AND wachtwoord ='$wachtwoord'";
    $result = $mysqli->query($sql);
    $gebruiker = $result->fetch_assoc();

    session_start();
    $_SESSION['rol'] = $gebruiker['rol'];
    $_SESSION['gebruiker_id'] = $gebruiker['id'];
    $_SESSION['naam'] = $gebruiker['voornaam'];

    header("location: melding-maak.php");
}
?>
<html>
    <head></head>
    <body>
        <div class="container py-5 px-5">                                   
            <form method="POST" action="login.php">
                <div class="col-md-12">
                    <label for="Email">Email adres</label>
                    <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
                </div>
                <div class="col-md-12">
                    <label for="Wachtwoord">Wachtwoord</label>
                    <input type="password" class="form-control" placeholder="Wachtwoord" name="wachtwoord" required>
                </div>
                <div class="link">
                    <b> Geen account, maak er een <a href="gebruiker-maak.php" class="link-primary">hier.</a></b>
                </div>
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
