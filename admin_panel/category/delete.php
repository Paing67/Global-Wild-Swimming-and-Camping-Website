<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $category = $pdo_conn->prepare("DELETE FROM category WHERE id=".$id);
    $category->execute();
    header("location: category.php");
?>