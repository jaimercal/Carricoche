<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <title>Inicio de Sesión</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <form class="" name="signupForm" action="controller/signupController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="signupName">Nombre:</label>
            <input class="" id="" type="text" name="sName">
        </div>
        <div class="">
            <label for="signupSurname">Apellidos:</label>
            <input class="" id="" type="text" name="sSurname">
        </div>
        <div class="">
            <label for="signupUsername">Nombre Usuario:</label>
            <input class="" id="" type="text" name="sUsername">
        </div>
        <div class="">
            <label for="signupEmail">Email:</label>
            <input class="" id="" type="text" name="sEmail">
        </div>
        <div class="">
            <label for="signupAddress">Dirección:</label>
            <input class="" id="" type="text" name="sAddress">
        </div>
        <div class="">
            <label for="signupPassword">Contraseña:</label>
            <input class="" id="" type="password" name="sPassword">
        </div>
        <div class="">
            <label for="signupPasswordRep">Repetir contraseña:</label>
            <input class="" id="" type="password" name="sPasswordRep">
        </div>
    </form>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>