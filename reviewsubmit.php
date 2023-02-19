<?php
require_once('db/dbconfig.php');
$name = $_POST['name'];
$location = $_POST['location'];
$comment = $_POST['comment'];

$sql = "INSERT INTO review(name,location,comment) VALUES (:name,:location,:comment)";
$sql = $pdo_conn->prepare($sql);
$sql->execute(array(':name' => $name, ':location' => $location, ':comment' => $comment));
header('location:reviews.php');
?>