<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
	header("Location: index.html");
	exit();
}	
?>