<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $product_order = $pdo_conn->prepare("DELETE FROM booking WHERE id=".$id);
    $product_order->execute();
    header("location: booking.php");
?>