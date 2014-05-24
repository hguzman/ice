<?php
  include("seguridad.php");
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
    <!--Barra negra-->
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
    <!--Barra negra-->
    <br>
    <!--Logo ICE-->
    <div class="row">
      <div align="center" class="medium-12 columns"><a href="http://www.caerk.com/ice"><img src="images/logoice.png" width="180" height="180"></a></div>
    </div>
    <!--Logo ICE-->
    <br>
    <br>
    <!--Menú Principal-->
    <nav class="row">
        <div class="large-12 columns">
          <ul class="button-group radius even-6">
            <li><a class="button" href="http://www.caerk.com/ice/reginst.html">REGISTRO</a></li>
            <li><a class="button" href="#">PROFESOR</a></li>
            <li><a class="button" href="#">ESTUDIANTE</a></li>
            <li><a class="button" href="#">INSTITUCIÓN</a></li>
            <li><a class="button" href="#">CURRÍCULO</a></li>
            <li><a class="button" href="#">CURSOS</a></li> 
          </ul>
        </div>
    </nav>

    <div class="row">
      <!--Formulario-->
      <div align="left" class="large-12 columns">
        <fieldset>
         <legend>Registro de Instituciones</legend>
         <form action="codigo/guardarUsuario.php" method="post">
          <div class="row">
              <div class="large-12 columns">
                <label>Usuario
                  <input type="text" placeholder="Nombre Usuario" name="usu"/>
                </label>
              </div>
          </div>
          <div class="row">
              <div class="large-12 columns">
                <label>Contraseña
                  <input type="password" placeholder="Contraseña" name="con"/>
                </label>
              </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Perfil de Usuario
                <select name="per">
                  <option value="1">Administrador</option>
                  <option value="2">Institución</option>
                  <option value="3">Docente</option>
                  <option value="4">Estudiante</option>
                </select>
              </label>
            </div>
          </div>
          <input type="submit" value="Guardar Usuario" class="button expand">
         </form>
        </fieldset>
      </div>
      <!--Formulario-->      
    </div>
    <!--Menú Principal-->
    <br>
    <!--Pie de Página-->
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
    <!--Pie de Página-->
  </body>
</html>