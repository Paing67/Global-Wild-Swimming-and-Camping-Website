<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $location = $_POST['location'];
    $comment = $_POST['comment'];

    $review ="UPDATE review SET name =:name, location=:location, comment=:comment WHERE id=".$id;
    $review = $pdo_conn->prepare($review);
    $review->execute(array(':name'=>$name, ':location'=>$location,':comment'=>$comment));
    header('location:review.php');
?>