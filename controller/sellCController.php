<?php

require "../model/SellCVal.php";

if(isset($_POST) && !empty($_POST)){
    $name = $_POST['sellCName'];
    $brand = $_POST['sellCBrand'];
    $price = $_POST['sellCPrice'];
    $kilometers = $_POST['sellCKilometers'];
    $color = $_POST['sellCColor'];
    $type = $_POST['sellCType'];
    $year = $_POST['sellCYear'];
    $power = $_POST['sellCPower'];
    if(isset($_FILES) && !empty($_FILES)){
        $imagesF= $_FILES['sellCImagesF']['name'];
    }
    if(isset($_FILES) && !empty($_FILES)){
        $imagesLa= $_FILES['sellCImagesLa']['name'];
    }
    if(isset($_FILES) && !empty($_FILES)){
        $imagesLi= $_FILES['sellCImagesLi']['name'];
    }
}

$sell = new SellC($name,$brand,$price,$kilometers,$color,$type,$year,$power);
$sell->sellCValidation();
header("location: ../sell.php");
?>