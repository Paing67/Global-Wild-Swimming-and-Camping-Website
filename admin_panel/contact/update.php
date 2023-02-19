<?php
    require_once('../../db/dbconfig.php');
    $id=$_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    // var_dump($_POST);
    $contact ="UPDATE contact SET name =:name, email=:email, address=:address, message=:message WHERE id=".$id;
    $contact = $pdo_conn->prepare($contact);
    $contact->execute(array( ':name'=>$name, ':email'=>$email, ':address'=>$address, ':message'=>$message));
    header('location:contact.php');
   
?>