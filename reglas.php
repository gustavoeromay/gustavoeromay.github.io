<!DOCTYPE html>
<html lang="es">
  <head>

     <!-- Archivos Configuración CSS-->
     <?php
        include_once 'modulos/headconfig.php';
     ?>

     <link rel="icon" href="imagenes/favicon.png">
     <title>Navidad 2023 - Reglas</title>
  
  </head>

  <body>

  <audio src="micancion.mp3" preload="auto" autoplay loop></audio> 
  
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <img src="imagenes/reglas.gif" class="img-responsive" alt="Responsive image" width="200px">
            <h3 class="cover-heading">A tener en cuenta...</h3>
          </div>
          <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">Solo se genera una vez el Amigo Invisible. Si vuelvan a ingresar, les mostrará el mismo amigo designado.</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">El Presente puede ser algo artesanal, económico, significado, etc. El sistema le proveerá información sobre su amigo.</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Es un lindo momento, de reflexionar sobre las cualidades que tienen nuestra familia, que son muchas.</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">Nos daremos cuenta de que todos tenemos cosas buenas y lindas</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">y que es buena compartirlas en Navidad.</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Tengamos en cuenta que el mejor regalo, es sentirnos valorados por los demás</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info"> y que nuestras cualidades positivas, nos haran pasar un buen finde año y un mejor 2024.</a>
            </div>
            
            <p class="lead">
                <a href="index.php" class="btn btn-lg btn-danger">Regresa al Menú Principal....</a>
            </p>

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