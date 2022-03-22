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
    <form class="" name="contactForm" action="controller/contactController.php" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="contactEmail">Email:</label>
            <input class="" id="" type="text" name="email">
        </div>
        <div class="">
            <label for="contactCommentary">Comentario:</label>
            <textarea name="commentary" class="" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="button" class="" id="" onclick="validate()">Enviar</button>
    </form>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>