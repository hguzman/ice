<?php

//$server="sql6.bravehost.com";
//$usurio="ice2";
//$contrasena="k1234567890";
//$basedatos="icedb_1900960";
 
/* Conexion Servidor local*/

$server="127.0.0.1";
$usurio="root";
$contrasena="usrio01";
$basedatos="ice";

//conecto con la base de datos
	$db=mysql_connect($server,$usurio,$contrasena);
//selecciono la BBDD 
	mysql_select_db($basedatos,$db);// Seleccion la base de datos correcta
?>