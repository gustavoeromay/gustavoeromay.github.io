<!DOCTYPE html>
<html lang="es">
  <head>
   
   <!-- Archivos Configuración CSS-->
   <?php
      include_once 'modulos/headconfig.php';
   ?>
    <link rel="icon" href="imagenes/favicon.png">
    <title>Navidad 2023 - Inicio</title>  
  
  </head>

  <body>

    <audio src="micancion.mp3" preload="auto" autoplay loop></audio>
  
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <img src="imagenes/papanoel.gif" class="img-responsive" alt="Responsive image">
            <h1 class="cover-heading">NAVIDAD 2023.</h1>
            <p class="lead">Web Familiar, desarrollada para buscar nuestro Amigo Invisible.</p>
            <p class="lead">Papá Noel, el burrito Rabanito y la Inteligencia Artificial nos guiarán.</p>
            <p class="lead">
              <a href="reglas.php" class="btn btn-lg btn-danger">Reglas del Juego.</a>
              <a href="participante.php" class="btn btn-lg btn-default">Deseas Continuar ....</a>
            </p>
          </div>

          <!-- Archivos Pie de Página-->
          <?php
          include_once 'modulos/footer.php';
          ?>

        </div>

      </div>

    </div>

    <!-- Archivos Configuración SCRIPT-->
    <?php
      include_once 'modulos/footerconfig.php';
    ?>

  </body>
</html>