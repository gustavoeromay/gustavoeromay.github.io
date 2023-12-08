<!DOCTYPE html>
<html lang="es">

  <head>
   <!-- Archivos Configuración CSS-->
   <?php
      include_once 'modulos/headconfig.php';
   ?>
    <link rel="icon" href="imagenes/favicon.png">
    <title>Navidad 2023 - Participantes</title>
  </head>

  <body>

    <audio src="micancion.mp3" preload="auto" autoplay loop></audio> 
    
      <div class="site-wrapper">

        <div class="site-wrapper-inner">

          <div class="cover-container">

            <div class="inner cover">
              <img src="imagenes/renoscantando.gif" class="img-responsive" alt="Responsive image">

              <!-- I - Formulario -->
              <form action="amigo.php" method="post">

                <div class="form-group">
                      <label class="control-label"> 
                      <h1 class="cover-heading">Selecciona tu nombre ....</h1>
                      </label>
                      <select class="form-control" name="vpersona">
                          <option>Elige tu nombre para empezar a jugar ...</option>
                          <option>ANA</option>
                          <option>ANDRES</option>
                          <option>BETTY</option>
                          <option>GUSTAVO</option>
                          <option>MARIANO</option>
                          <option>MARTA</option>
                          <option>MARTIN</option>
                          <option>OSVALDO</option>
                          <option>SANTIAGO</option>
                          <option>SILVINA</option>
                          <option>SU</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="inputPassword" name="vclave" placeholder="Password">
                    </div>
                  </div>
                  <br>
                  <h4><hr></h4>  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Vamos a Buscar tu Amigo Invisible ...</button>
                  </div>         

              </form>
              <!-- F - Formulario -->

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