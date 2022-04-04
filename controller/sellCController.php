<?php
session_start();
require "../model/SellCVal.php";
require "../model/Photo.php";

if(isset($_POST) && !empty($_POST)){
    $name = $_POST['sellCName'];
    $brand = $_POST['sellCBrand'];
    $price = $_POST['sellCPrice'];
    $kilometers = $_POST['sellCKilometers'];
    $color = $_POST['sellCColor'];
    $type = $_POST['sellCType'];
    $year = $_POST['sellCYear'];
    $power = $_POST['sellCPower'];

    if(isset($_FILES) && !empty($_FILES)) {
        $imagesF = $_FILES['sellCImagesF'];
        $imagesLa = $_FILES['sellCImagesLa'];
        $imagesLi = $_FILES['sellCImagesLi'];
    }
}
$photo = new Photo($imagesF, $imagesLa, $imagesLi);
$sell = new SellCVal($name,$brand,$price,$kilometers,$color,$type,$year,$power,$photo);
$sell->sellCValidation();
header("location: ../sell.php");
?>