<?php
include 'database.php';

if (   $_POST['naam'] != ''
    && $_POST['beschrijving'] != '' )
    {

    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];

    $sql = "INSERT INTO categorieen (naam, beschrijving)
            VALUES ('$naam', '$beschrijving')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "Nieuwe categorie is gemaakt!";
        header("Location: procduct_toevoegen.php");
    }
}
?>