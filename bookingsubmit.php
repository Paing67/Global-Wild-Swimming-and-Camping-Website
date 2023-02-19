<?php
require_once('db/dbconfig.php');
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO booking(name,email,product,quantity) VALUES (:name,:email,:product,:quantity)";
$sql = $pdo_conn->prepare($sql);
$sql->execute(array(':name' => $name, ':email' => $email, ':product' => $product, ':quantity' => $quantity));
header('location:index.php');
?>