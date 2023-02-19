<?php
    require_once('../../db/dbconfig.php');

    $id= $_GET['id'];

    $contact = $pdo_conn->prepare("DELETE FROM contact WHERE id=".$id);
    $contact->execute();
    header("location: contact.php");
?>