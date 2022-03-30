<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <title>Vender</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <div id="sellSelect">
        <p>Selecciones el vehiculo que se desea vender:</p>
        <select id="sellSelector" onchange="selectorDeVenta()">
            <option value="0">...</option>
            <option value="1">Venta de coches</option>
            <option value="2">Venta de motos</option>
        </select>
    </div>
    <form class="" id="sellCar" name="sellCarForm" action="controller/sellController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="sellCarName">Modelo del coche: </label>
            <input class="" id="" type="text" name="sellCName">
        </div>
        <div class="">
            <label for="sellCarBrand">Marca del coche: </label>
            <input class="" id="" type="text" name="sellCBrand">
        </div>
        <div class="">
            <label for="sellCarPrice">Precio del coche: </label>
            <input class="" id="" type="text" name="sellCPrice">
        </div>
        <div class="">
            <label for="sellCarKilometers">Kilometraje del coche: </label>
            <input class="" id="" type="text" name="sellCKilometers">
        </div>
        <div class="">
            <label for="sellCarColor">Color del coche: </label>
            <input class="" id="" type="text" name="sellCColor">
        </div>
        <div class="">
            <label for="sellCarType">Tipo de coche: </label>
            <input class="" id="" type="text" name="sellCType">
        </div>
        <div class="">
            <label for="sellCarYear">Año del coche: </label>
            <input class="" id="" type="text" name="sellCYear">
        </div>
        <div class="">
            <label for="sellCarPower">Potencia del coche: </label>
            <input class="" id="" type="text" name="sellCPower">
        </div>
        <div class="">
            <label for="sellCarImages">Imagenes del coche (Vista Frontal): </label>
            <input class="" id="" type="file" name="sellCImagesF">
        </div>
        <div class="">
            <label for="sellCarImages">Imagenes del coche (Vista Lateral): </label>
            <input class="" id="" type="file" name="sellCImagesL">
        </div>
        <button type="button" class="" id="" onclick="validate()">Enviar</button>
    </form>

    <form class="" id="sellMoto" name="sellMotoForm" action="controller/contactController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="sellMotoName">Modelo de la moto: </label>
            <input class="" id="" type="text" name="sellMName">
        </div>
        <div class="">
            <label for="sellMotoBrand">Marca de la moto: </label>
            <input class="" id="" type="text" name="sellMBrand">
        </div>
        <div class="">
            <label for="sellMotoPrice">Precio de la moto: </label>
            <input class="" id="" type="text" name="sellMPrice">
        </div>
        <div class="">
            <label for="sellMotoKilometers">Kilometraje de la moto: </label>
            <input class="" id="" type="text" name="sellMKilometers">
        </div>
        <div class="">
            <label for="sellMotoColor">Color de la moto: </label>
            <input class="" id="" type="text" name="sellMColor">
        </div>
        <div class="">
            <label for="sellMotoType">Tipo de moto: </label>
            <input class="" id="" type="text" name="sellMType">
        </div>
        <div class="">
            <label for="sellMotoYear">Año de la moto: </label>
            <input class="" id="" type="text" name="sellMYear">
        </div>
        <div class="">
            <label for="sellMotoPower">Potencia de la moto: </label>
            <input class="" id="" type="text" name="sellMPower">
        </div>
        <div class="">
            <label for="sellMotoCC">Cilindrada de la moto: </label>
            <input class="" id="" type="text" name="sellMCC">
        </div>
        <div class="">
            <label for="sellMotoImages">Imagenes de la moto (vista frontal): </label>
            <input class="" id="" type="file" name="sellMImagesF">
        </div>
        <div class="">
            <label for="sellMotoImages">Imagenes de la moto (vista lateral): </label>
            <input class="" id="" type="file" name="sellMImagesL">
        </div>
        <button type="button" class="" id="" onclick="validate()">Enviar</button>
    </form>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>