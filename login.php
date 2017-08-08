<?php
    session_start();
    if(isset($_SESSION['k_username'])){
    $user = $_SESSION['k_username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PRODUCTOS | VITALITY COFFEE</title>
    <link href="estilo/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
     <div id="nav">
        <h1><a href="index.php">VITALITY</a></h1>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="index.php">Nosotros</a></li>
            <li><a href="index.php">Contacto</a></li>
            <li><a href="index.php">Carrito</a></li>
            <?php
                if(isset($_SESSION['k_username'])){
                     echo"<li id='activo'><a href='login.php'>$user</a></li>";
                }
            else{
                         echo"<li id='activo'><a href='login.php'>Log In</a></li>";
            }
            ?>
        </ul>
    </div>
    <div id="contenido-login">
        <h2>Login Form</h2>
        <form action="estructura/validar.php" method="post">
          <div class="imgcontainer">
            <img src="imagenes/iconos/usuario.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
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