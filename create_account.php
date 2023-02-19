<?php
    require_once('db/dbconfig.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];

    $pdo_statement = "INSERT INTO user (name,email, pass, country) VALUES (:name, :email, :pass, :country)";
    $pdo_statement= $pdo_conn->prepare($pdo_statement);
    $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, ':pass'=>$pass, ':country'=>$country));

   header('location:login.php');
?>