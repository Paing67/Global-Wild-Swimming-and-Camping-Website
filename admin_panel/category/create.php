<?php
    require_once('../../db/dbconfig.php');
    $c_name = $_POST['category'];

    $category = "INSERT INTO category (c_name) VALUES(:c_name)";
    $category = $pdo_conn->prepare($category);
    $category->execute(array(':c_name'=> $c_name));
    header('location:category.php');
    // var_dump($product);
?>