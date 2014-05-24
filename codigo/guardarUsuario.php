<?php

	include("../seguridad.php");
	include("../conexion.php"); // esto conecta con la base de datos

	$usuario=$_POST["usu"];
	$cont=$_POST["con"];
	$perfil=$_POST["per"];

$sql ="insert into usuarios value('$usuario','$cont','$perfil')";
//echo $sql;
$result = mysql_query($sql);

header('Location: ../modregistro.php');	
?>