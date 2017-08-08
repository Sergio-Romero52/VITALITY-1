<?php
	include("ESTRUCTURA/config.php");
	session_start();

function formRegistro(){
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>REGISTRO | VITALITY COFFEE</title>
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
    <div id="registro">
         <form action="registrar.php" method="post" enctype="multipart/formdata">


         <h1>Registro de usuario</h1>
        <center> <img width=400px  style="float:right; margin: 0px 50px;" id="logo2" src="imagenes/VitalityWhite.png" ></img></center>
         <tr>
             <td>
                <br><P> Usuario:</P>       <input type="text" maxlength="16" name="username" placeholder="Usuario"></br>
             </td>
         </tr>
             <br><P>Nombre:</P>        <input type="text" maxlength="20" name="nombre" placeholder="Nombre"></br>
            <br><P>Apellido Paterno:</P>         <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno"></br>
            <br><P>Apellido Materno:</P>         <input type="text" name="apellidoMaterno" placeholder="Apellido Materno"></br>
             <br><P>Password:</P>      <input type="password" name="password" placeholder="password"></br>
             <br><P>Confirmar Password:</P><input type="password" name="password2" placeholder="confirmar"></br>
             <br><P>Email:</P>         <input type="text" name="email" placeholder="Email"></br>

         <br><input type="submit" value="Enviar"></br>

         </form>

<?php
}
if(isset($_POST['username'])){
 $username=$_POST['username'];
 $nombre=$_POST['nombre'];
 $apellidoPaterno=$_POST['apellidoPaterno'];
 $apellidoMaterno=$_POST['apellidoMaterno'];
 $password=$_POST['password'];
 $password2=$_POST['password2'];
 $email=$_POST['email'];

 
 
	 
 //Hay campos en blanco?
 if($username==NULL|$password==NULL | $email==NULL | $nombre==NULL | $apellidoPaterno==NULL){
	 
 		//echo "Un  campo esta vacio";
		echo"<script>alert('Un campo esta vacio')</script>";
 		formRegistro();
 	}else{
 		//¿Coinciden las contraseñas?
 		if ($password!=$password2) {
			
 			//echo " Las contraseñas no coinciden";
			echo"<script>alert('Las Contraseñas no coinciden')</script>";
 			formRegistro();
 		}else{
 			//Comprobamos si el nombre de usuario o la cuenta de correo ya existian
 			$checkUser = sqlsrv_query($CONN, "SELECT us_username FROM usuarios WHERE us_username='$username'");
 			$username_exist=sqlsrv_num_rows($checkUser);

 			$checkEmail = sqlsrv_query($CONN, "SELECT us_email FROM usuarios WHERE us_email='$email'");
 			$email_exist = sqlsrv_num_rows($checkEmail);

 			if ($email_exist>0|$username_exist>0) {
 				//echo "El nombre de usuario o la cuenta de correo ya estan en uso";
				echo"<script>alert('El nombre de usuario o la cuenta de correo ya estan en uso')</script>";
 				formRegistro();
 			}else{
 				$query = "INSERT INTO usuarios (us_username,us_nombre,us_email,us_password,us_apellidoPaterno,us_apellidoMaterno) values('$username','$nombre','$email''$password','$apellidoPaterno','$apellidoMaterno')";
 				sqlsrv_query($query) or die(sqlsrv_errors());
 				echo "<center>";
 				echo 'El usuario  '.$username.'  ha sido registrado de manera existosa <br/>';
 				echo "Ahora puede entrar ingresando su usuario y su password <br/>";
 				echo "</center>";
 				?>

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
 <?php
 }//username
 }//password
 }//username
 }else{//isset
 formRegistro();
}