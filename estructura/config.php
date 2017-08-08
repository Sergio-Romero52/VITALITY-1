<?php
$HOST="DESKTOP-L8150V0";
$USER="sa";
$PASS="usersql";
$BASE="VitalityDB";

$INFO=array("Database"=>$BASE, "UID"=>$USER, "PWD"=>$PASS);
$CONN=sqlsrv_connect($HOST, $INFO);

if( $CONN ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>