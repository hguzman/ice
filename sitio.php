<?php
  include("conexion.php"); // esto conecta con la base de datos

  $usuario=$_POST['usu'];
  $contrasena=$_POST['con'];

//  echo $usuario;
//  echo $contrasena;


  $sql = "select * from usuarios where usuario='$usuario' and contrasena='$contrasena'";

//  echo $sql;

  $rs = mysql_query($sql,$db); // Aqui hace la consulta y el resultado lo coloca en la variable

  if (mysql_num_rows($rs)==0){
    header('Location: index.html'); // Regresa al index
  }else{
    session_start(); //inicia sesion

   // $fila = mysql_fetch_assoc($rs);
    $_SESSION["autentificado"] ="SI"; //guarda la variable de sesion
  }

?>
<!DOCTYPE html>
<html lang="es">
 <head>
   <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>.:ICE:.</title>
   <link rel="shortcut icon" href="http://www.caerk.com/ice/favicon.ico">
	 <!-- If you are using CSS version, only link these 2 files, you may add overrides if you like. -->
	 <link rel="stylesheet" href="css/normalize.css">
	 <link rel="stylesheet" href="css/foundation.css">
	 <script src="js/vendor/modernizr.js"></script>
   <style type="text/css">
     body{background-image:url('images/s.png');}
   </style>
 </head>
  <body align="center">
    <div class="row">
        <nav class="top-bar" data-topbar>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">              
              <li class="active"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
            </ul>
        <!-- Left Nav Section -->
            <ul class="left">
              <li><a href="#"><?php echo $usuario ?></a></li>
            </ul>
        </section>                
        </nav>
    </div>
    <br>
    <div class="row">
      <div align="center" class="medium-12 columns"><a href="http://www.caerk.com/ice"><img src="images/logoice.png" width="180" height="180"></a></div>
    </div>
    <br>
    <BR>
      <nav class="row">
          <div class="large-12 columns">
            <ul class="button-group radius even-6">
              <li><a class="button" href="modregistro.php">REGISTRO</a></li>
              <li><a class="button" href="#">PROFESOR</a></li>
              <li><a class="button" href="#">ESTUDIANTE</a></li>
              <li><a class="button" href="#">INSTITUCIÓN</a></li>
              <li><a class="button" href="#">CURRÍCULO</a></li>
              <li><a class="button" href="#">CURSOS</a></li> 
            </ul>
          </div>
        </nav>
        <br>
        <div><img src="images/12.jpg"  width="965" height="900"></div>
        <footer class="row">
      <div class="large-12 olumns">
        <hr/>
        <div class="row">
          <div class="large-3 columns">
            <p>© Copyright ICE 2014.</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>