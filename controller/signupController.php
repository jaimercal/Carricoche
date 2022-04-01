<?php

require "../model/User.php";
require "../model/Signup.php";

if(isset($_POST) && !empty($_POST)){
    $email = $_POST['sEmail'];
    $name = $_POST['sName'];
    $surname = $_POST['sSurname'];
    $username = $_POST['sUsername'];
    $address = $_POST['sAddress'];
    $password = $_POST['sPassword'];
    $passwordRep = $_POST['sPasswordRep'];

    $user = new User($name, $surname, $username, $email, $address, $password);
    $signup = new Signup($user, $passwordRep);
    $signup->signupValidation();
    //header("location: ../sign_up.php");
}