<?php
    require_once('db/dbconfig.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $pdo_statement = "INSERT INTO booking (name,email, product, quantity) 
    VALUES (:name, :email, :product, :quantity)";
    $pdo_statement= $pdo_conn->prepare($pdo_statement);
    $pdo_statement->execute(array(':name'=>$name, ':email'=>$email, 'product'=>$product, ':quantity'=>$quantity));
    // var_dump($pdo_statement);
    header('location:pitches.php');
?>