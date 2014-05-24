<?php
	session_start(); // inicia sesión
	session_unset(); // quita los valores de la variable
	session_destroy(); // quita variables
	header('Location: index.html');
?>