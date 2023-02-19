<?php
require_once('db/dbconfig.php');
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name,email,address,message) VALUES (:name,:email,:address,:message)";
$sql = $pdo_conn->prepare($sql);
$sql->execute(array(':name' => $name, ':email' => $email, ':address' => $address, ':message' => $message));
header('location:contact.php');
?>