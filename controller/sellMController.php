<?php

require "../model/SellMVal.php";

if(isset($_POST) && !empty($_POST)){
    $name = $_POST['sellMName'];
    $brand = $_POST['sellMBrand'];
    $price = $_POST['sellMPrice'];
    $kilometers = $_POST['sellMKilometers'];
    $color = $_POST['sellMColor'];
    $type = $_POST['sellMType'];
    $year = $_POST['sellMYear'];
    $power = $_POST['sellMPower'];
    $cc = $_POST['sellMCC'];
    if(isset($_FILES) && !empty($_FILES)){
        $imagesF= $_FILES['sellMImagesF']['name'];
    }
    if(isset($_FILES) && !empty($_FILES)){
        $imagesLa= $_FILES['sellMImagesLa']['name'];
    }
    if(isset($_FILES) && !empty($_FILES)){
        $imagesLi= $_FILES['sellMImagesLi']['name'];
    }
}
$sell = new SellMVal($name,$brand,$price,$kilometers,$color,$type,$year,$power,$cc);
$sell->sellMValidation();
header("location: ../sell.php");
?>