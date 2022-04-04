<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "includes/head.php";
    ?>
    <title>Comprar Coches</title>
</head>
<body>
<?php
include "includes/header.php";
include "includes/navIndex.php";
include "includes/navBuy.php";
?>
<section>
    <div class="products">
        <?php
        require_once "model/Store.php";
        $store = new Store();
        echo $store->printC();
        ?>
    </div>
</section>
<?php
include "includes/footer.php";
?>
</body>
</html>