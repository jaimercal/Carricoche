<?php

require "../model/ContactVal.php";

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['cEmail'];
    $commentary = $_POST['cCommentary'];
}

$contact = new ContactVal($email, $commentary);
$contact->contactValidation();
header("location: ../contact.php");
