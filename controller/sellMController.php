<?php

require "../model/SellMVal.php";
require "../model/Photo.php";

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
        if (move_uploaded_file($_FILES['sellMImagesF']['tmp_name'], "../img/imgStore/" . $_FILES['sellMImagesF']['name'])) {
            $imagesF = $_FILES['sellMImagesF'];
        }
        if (move_uploaded_file($_FILES['sellMImagesLa']['tmp_name'], "../img/imgStore/" . $_FILES['sellMImagesLa']['name'])) {
            $imagesLa = $_FILES['sellMImagesLa'];
        }
        if (move_uploaded_file($_FILES['sellMImagesLi']['tmp_name'], "../img/imgStore/" . $_FILES['sellMImagesLi']['name'])) {
            $imagesLi = $_FILES['sellMImagesLi'];
        }
    }
}
$photo = new Photo($imagesF, $imagesLa, $imagesLi);
$sell = new SellMVal($name,$brand,$price,$kilometers,$color,$type,$year,$power,$cc,$photo);
$sell->sellMValidation();
header("location: ../sell.php");
?>