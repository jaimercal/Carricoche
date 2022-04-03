
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        include "includes/head.php";
    ?>
    <title>Home</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <h2>BIENVENIDO</h2>
    <p>Compra venta de vehiculos de segunda mano</p>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/imgSlider/lateral.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/imgSlider/frontal.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/imgSlider/libre.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>
