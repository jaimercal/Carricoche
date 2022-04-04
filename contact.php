<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <script src="js/contactValidation.js"></script>
    <title>Contacto</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
?>
<section>
    <div id="logInBox">
        <h2>Contactenos</h2>
    <form id="contactForm" class="" name="contactForm" action="controller/contactController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="contactEmail">Correo electronico:</label><br>
            <input class="" id="" type="text" name="cEmail">
        </div>
        <div class="">
            <label for="contactCommentary">Comentario del cliente:</label><br>
            <textarea name="cCommentary" class="" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="button" class="" id="" onclick="validateContact()">Enviar</button>
    </form>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>