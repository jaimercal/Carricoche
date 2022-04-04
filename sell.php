<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <script src="js/carsValidations.js"></script>
    <script src="js/motosValidations.js"></script>
    <script src="js/jsSelector.js"></script>
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
    <div id="logInBox">
    <form class="" id="sellCar" name="sellCarForm" action="controller/carsController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="sellCarName">Modelo del coche: </label><br>
            <input class="" id="" type="text" name="sellCName"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarBrand">Marca del coche: </label><br>
            <input class="" id="" type="text" name="sellCBrand"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarPrice">Precio del coche: </label><br>
            <input class="" id="" type="text" name="sellCPrice"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarKilometers">Kilometraje del coche: </label><br>
            <input class="" id="" type="text" name="sellCKilometers"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarColor">Color del coche: </label><br>
            <input class="" id="" type="text" name="sellCColor"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarType">Tipo de coche: </label><br>
            <input class="" id="" type="text" name="sellCType"><br><br><br>
        </div>
        <div class="">
            <label for="sellCarYear">Año del coche: </label><br>
            <input class="" id="" type="text" name="sellCYear"><br><br>
        </div>
        <div class="">
            <label for="sellCarPower">Potencia del coche: </label><br>
            <input class="" id="" type="text" name="sellCPower"><br><br>
        </div>
        <div class="">
            <label for="sellCarImagesF">Imagenes del coche (Vista Frontal): </label><br>
            <input class="" id="" type="file" name="sellCImagesF"><br><br>
        </div>
        <div class="">
            <label for="sellCarImagesLa">Imagenes del coche (Vista Lateral): </label><br>
            <input class="" id="" type="file" name="sellCImagesLa"><br><br>
        </div>
        <div class="">
            <label for="sellCarImagesLi">Imagenes del coche (Libre): </label><br>
            <input class="" id="" type="file" name="sellCImagesLi"><br><br>
        </div>
        <button type="button" class="" id="" onclick="validateC()">Enviar</button>
    </form>
    </div>
    <div id="logInBox">
    <form class="" id="sellMoto" name="sellMotoForm" action="controller/motosController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="sellMotoName">Modelo de la moto: </label><br>
            <input class="" id="" type="text" name="sellMName"><br><br>
        </div>
        <div class="">
            <label for="sellMotoBrand">Marca de la moto: </label><br>
            <input class="" id="" type="text" name="sellMBrand"><br><br>
        </div>
        <div class="">
            <label for="sellMotoPrice">Precio de la moto: </label><br>
            <input class="" id="" type="text" name="sellMPrice"><br><br>
        </div>
        <div class="">
            <label for="sellMotoKilometers">Kilometraje de la moto: </label><br>
            <input class="" id="" type="text" name="sellMKilometers"><br><br>
        </div>
        <div class="">
            <label for="sellMotoColor">Color de la moto: </label><br>
            <input class="" id="" type="text" name="sellMColor"><br><br>
        </div>
        <div class="">
            <label for="sellMotoType">Tipo de moto: </label><br>
            <input class="" id="" type="text" name="sellMType"><br><br>
        </div>
        <div class="">
            <label for="sellMotoYear">Año de la moto: </label><br>
            <input class="" id="" type="text" name="sellMYear"><br><br>
        </div>
        <div class="">
            <label for="sellMotoPower">Potencia de la moto: </label><br>
            <input class="" id="" type="text" name="sellMPower"><br><br>
        </div><br>
        <div class="">
            <label for="sellMotoCC">Cilindrada de la moto: </label><br>
            <input class="" id="" type="text" name="sellMCC"><br><br>
        </div>
        <div class="">
            <label for="sellMotoImagesF">Imagenes de la moto (vista frontal): </label><br>
            <input class="" id="" type="file" name="sellMImagesF"><br><br>
        </div>
        <div class="">
            <label for="sellMotoImagesLa">Imagenes de la moto (vista lateral): </label><br>
            <input class="" id="" type="file" name="sellMImagesLa"><br><br>
        </div>
        <div class="">
            <label for="sellMotoImagesLi">Imagenes de la moto (libre): </label><br>
            <input class="" id="" type="file" name="sellMImagesLi"><br><br>
        </div>
        <button type="button" id="" class="" onclick="validateM()">Enviar</button>
    </form>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>