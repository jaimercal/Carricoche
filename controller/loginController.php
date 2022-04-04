<?php

require_once "../model/Login.php";

if(isset($_POST) && !empty($_POST)){
    $registre = $_POST['lRegister'];
    $password = $_POST['lPassword'];

    $login = new Login($registre, $password);
    $login->logIn();
}