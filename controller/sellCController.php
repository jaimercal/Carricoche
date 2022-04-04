<?php

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
        if (move_uploaded_file($_FILES['sellCImagesF']['tmp_name'], "../img/imgStore/" . $_FILES['sellCImagesF']['name'])) {
            $imagesF = $_FILES['sellCImagesF'];
        }
        if (move_uploaded_file($_FILES['sellCImagesLa']['tmp_name'], "../img/imgStore/" . $_FILES['sellCImagesLa']['name'])) {
            $imagesLa = $_FILES['sellCImagesLa'];
        }
        if (move_uploaded_file($_FILES['sellCImagesLi']['tmp_name'], "../img/imgStore/" . $_FILES['sellCImagesLi']['name'])) {
            $imagesLi = $_FILES['sellCImagesLi'];
        }
    }
}
$photo = new Photo($imagesF, $imagesLa, $imagesLi);
$sell = new SellCVal($name,$brand,$price,$kilometers,$color,$type,$year,$power,$photo);
$sell->sellCValidation();
header("location: ../sell.php");
?>