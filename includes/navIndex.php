
<script>


    function abrirNavMovil(){
        document.getElementsByClassName("nav")[0].style.width="300px";
    }
    function cerrarNavMovil(){
        document.getElementsByClassName("nav")[0].style.width="0";

    }
</script>


<nav id="navIndex">
    <div id="cerrarNavBar" href="javascript:void(0)" onclick="cerrarNavMovil()">
       x
    </div>


    <div class="nav">

        <div class="home"><a href="index.php"><img src="img/logos/LogoSinFondo.png" alt="LogoCarricoche" title="Logo de la empresa"></a></div>
        <div class="buy"><a href="buy.php">Comprar</a></div>
        <div class="sell"><a href="sell.php">Vender</a></div>
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
    <div id="navMovil">
        <span style="font-size: 30px;cursor: pointer" onclick="abrirNavMovil()"><img src="img/icons/navIcon.png" alt="IconoMenú" title="Icono Menú"></span>
    </div>
