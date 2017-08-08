<?php
    session_start();
 if(isset($_SESSION['k_username'])){
    $user = $_SESSION['k_username'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>VITALITY COFFEE</title>
    <link href="estilo/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <div id="nav">
        <h1><a href="index.php">VITALITY</a></h1>
        <ul>
            <li id="activo"><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="index.php">Nosotros</a></li>
            <li><a href="index.php">Contacto</a></li>
            <li><a href="index.php">Carrito</a></li>
            <?php
                if(isset($_SESSION['k_username'])){
                     echo"<li><a href='estructura/cerrar.php'>Cerrar Sesión</a></li>";
                }
            else{
                         echo"<li><a href='login.php'>Log In</a></li>";
            }
            ?>
        </ul>
    </div>
    <div id="contenido-inicio">
        <br>
        <h1>¡Bienvenido a Vitality!</h1>
        <br>
        <p>Bienvenido a Vitality el lugar donde podrás adquirir el mejor café orgánico de alta calidad miientras consumes un producto 100% mexicano.</p>
        <br>
        <div id="productos">
            <h3><a href="#">Ver Productos</a></h3>
        </div>
        <div id="registrar">
            <h3><a href="registrar.php">Regístrate</a></h3>
        </div>
    </div>
    <div id="elementos">
        <div id="elemento1"><img src="imagenes/bolsaNegra.jpg"><br>
            <h3>Café Orgánico</h3><br>
            <p>Selección de los mejores granos de café organico</p>
        </div>
        <div id="elemento1"><img src="imagenes/bolsaNegra.jpg"><br>
            <h3>Café Orgánico</h3><br>
            <p>Selección de los mejores granos de café organico</p>
        </div>
        <div id="elemento1"><img src="imagenes/bolsaNegra.jpg"><br>
            <h3>Café Orgánico</h3><br>
            <p>Selección de los mejores granos de café organico</p>
        </div>
    </div>
    
    <div id="footer">
        <h2>Copyright © 2017 Vitality Coffee</h2>
        <div id="navFooter">
            <ul>
                <li><a rel="nofollow" href="http://www.facebook.com/"> <img align="center"  width=40px src="imagenes/iconos/Facebook.png" /></a></li>
				<li><a rel="nofollow" href="https://twitter.com/"> <img align="center" width=60px src="imagenes/iconos/Twitter.png" /></a></li>
				<li><a rel="nofollow" href="https://www.instagram.com/"> <img align="center" width=60px src="imagenes/iconos/Instagram.png" /></a></li>
                <li><a rel="nofollow" href="https://www.youtube.com/"> <img align="center" width=60px src="imagenes/iconos/Youtube.png" /></a></li>
            </ul>
        </div>
    </div>
</body>

</html>