
<nav class="navIndex">
    <div class="navIndexIcon"><img src="img/icons/navIcon.png" alt="IconoMenú" title="Icono Menú"></div>
    <div class="nav">
        <div class="home"><a href="index.php">Inicio</a></div>
        <div class="news"><a href="news.php">Novedades</a></div>
        <div class="buy"><a href="buy.php">Comprar</a></div>
        <div class="sell"><a href="sell.php">Vender</a></div>
        <div class="lastdays"><a href="lastdays.php">LastDays</a></div>
        <div class="maintenance"><a href="mainteinance.php">Mantenimiento</a></div>
        <div class="contact"><a href="contact.php">Contacto</a></div>
        <?php
            if(isset($_SESSION['username'])){
                echo "<div class='profile'><a href='profile.php'>Perfil</a></div>";
                echo "<div class='logout'><a href='includes/logout.php'>Cerrar Sesión</a></div>";
            }else{
                echo "<div class='signup'><a href='sign_up.php'>Registrarse</a></div>";
                echo "<div class='login'><a href='log_in.php'>Iniciar Sesión</a></div>";
            }
        ?>
    </div>
</nav>
