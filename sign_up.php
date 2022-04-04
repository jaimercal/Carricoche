<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <script src="js/signupValidation.js"></script>
    <title>Registro de Usuario</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <div id="logInBox">
        <h2>Registrese</h2>
    <form id="signupForm" class="" name="signupForm" action="controller/signupController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="signupName">Nombre:</label><br>
            <input class="" id="" type="text" name="sName">
        </div>
        <div class="">
            <label for="signupSurname">Apellidos:</label><br>
            <input class="" id="" type="text" name="sSurname">
        </div>
        <div class="">
            <label for="signupUsername">Nombre Usuario:</label><br>
            <input class="" id="" type="text" name="sUsername">
        </div>
        <div class="">
            <label for="signupEmail">Correo Electronico:    </label><br>
            <input class="" id="" type="text" name="sEmail">
        </div>
        <div class="">
            <label for="signupAddress">Dirección:</label><br>
            <input class="" id="" type="text" name="sAddress">
        </div>
        <div class="">
            <label for="signupPassword">Contraseña:</label><br>
            <input class="" id="" type="password" name="sPassword">
        </div>
        <div class="">
            <label for="signupPasswordRep">Repetir contraseña:</label><br>
            <input class="" id="" type="password" name="sPasswordRep">
        </div>
        <button type="button" class="" id="" onclick="validateSignup()">Enviar</button>
    </form>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>