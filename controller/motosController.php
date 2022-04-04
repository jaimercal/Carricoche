<?php
session_start();
require_once "../model/Motos.php";
require_once "../model/Photo.php";

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
    if(isset($_FILES) && !empty($_FILES)) {
        $imagesF = $_FILES['sellMImagesF'];
        $imagesLa = $_FILES['sellMImagesLa'];
        $imagesLi = $_FILES['sellMImagesLi'];
    }
}
$photo = new Photo($imagesF, $imagesLa, $imagesLi);
$sell = new Motos($name,$brand,$price,$kilometers,$color,$type,$year,$power,$cc,$photo);
$sell->sellMValidation();
header("location: ../sell.php");
?>