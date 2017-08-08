<?php
session_start();
require("config.php");
function quitar($mensaje){
	$nopermitidos=array("'",'\\','<','>',"\"");
	$mensaje=str_replace($nopermitidos,"",$mensaje);
	return $mensaje;
}
//echo $_POST["usuario"];
//echo $_POST["password"];
if(trim($_POST['username']) != "" && trim($_POST["password"]) != ""){
	$usuario=strtolower(htmlentities($_POST['username'],ENT_QUOTES));
	$pass=$_POST["password"];
	$result=sqlsrv_query($CONN, "select us_username, us_password from usuarios where us_username='$usuario'");
	if($row=sqlsrv_fetch_array($result)){
		if($row["us_password"]=$pass){
			$_SESSION['k_username']=$row['us_username'];
				echo 'Has sido logueado correctamente, '.$_SESSION['k_username'].' ¡Bienvenido!';
                header('Location: ../index.php');
			}
		}else{
            header('Location: ../login.php');
		}
	}else{
          header('Location: ../login.php');
	}
sqlsrv_close($CONN);
?>