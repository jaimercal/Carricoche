<?php

require "../model/ContactVal.php";

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['email'];
    $commentary = $_POST['commentary'];
}

$contact = new ContactVal($email, $commentary);
$contact->contactValidation();
header("location: ../contact.php");
?>
