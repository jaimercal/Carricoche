<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <script src="js/loginValidation.js"></script>
    <title>Inicio de Sesión</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <div id="logInBox">
        <h2>Inicie sesion</h2>
    <form id="loginForm" class="" name="loginForm" action="controller/loginController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="loginUsername">Nombre de Usuario</label><br>
            <input class="" id="" type="text" name="lRegister" >
        </div>
        <div class="">
            <label for="loginPassword">Contraseña</label><br>
            <input class="" id="" type="password" name="lPassword" >
        </div>
        <button type="button" class="" id="" onclick="validateLogin()">Entrar</button>
    </form>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>