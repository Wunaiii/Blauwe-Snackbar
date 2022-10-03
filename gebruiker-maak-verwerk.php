<?php
include 'database.php';

if (   $_POST['firstname'] != ''
    && $_POST['lastname'] != '' 
    && $_POST['email'] != ''
    && $_POST['password'] != ''
    && $_POST['phonenumber'] != '' )
    {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $role = 'klant';

    $sql = "INSERT INTO gebruikers (firstname, lastname, email, password, phonenumber, rol)
            VALUES ('$firstname', '$lastname', '$email', '$password', '$phonenumber', '$klant')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "New record created successfully";
        header("location: login.php");
    }
}
?>