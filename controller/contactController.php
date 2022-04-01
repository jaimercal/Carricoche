<?php

require "../model/Contact.php";

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['cEmail'];
    $commentary = $_POST['cCommentary'];

    $contact = new Contact($email, $commentary);
    $contact->contactValidation();
    header("location: ../contact.php");
}