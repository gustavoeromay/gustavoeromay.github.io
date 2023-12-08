<!DOCTYPE html>
<html lang="es">
  <head>
 
    <!-- Archivos Configuración CSS-->
    <?php
      include_once 'modulos/headconfig.php';
   ?>
 
    <link rel="icon" href="imagenes/favicon.png">

    <title>Navidad 2023 - Generando Amigo</title>

  </head>

  <body>

  <?php 
    $flag=false;
    $hero = $_POST['vpersona'];
    $clave = $_POST['vclave'];
    $error = "";
    $mensaje = "";
    $amigo = "";
    $imagen="";
    $caracteristicas="";
    
  
  if (isset($_POST['vpersona']) && isset($_POST['vclave'])) {

      if ($hero == 'ANA' && $clave == 'baile' ){
        $amigo="MARIANO";
        $flag=true;
        $imagen="imagenes/mariano.jpg";
        $caracteristicas="Es de acción rápida y confían en su poder, por eso no pierden el tiempo pensando en problemas, de hecho, su manera de resolverlos es la acción. Un aspecto negativo de esta actitud, a veces, es la impulsividad y falta de paciencia, además de arriesgarse demasiado. Tampoco soportan equivocarse ni el fracaso.";
      }
      
      if ($hero == 'GUSTAVO' && $clave == 'gus' ){
          $amigo="GUSTAVO";
          $flag=true;
          $imagen="imagenes/gustavo.jpg";
          $caracteristicas="Suele ser muy sincero, pero muy impactante. Puede bromear acerca de las cosas que otras personas no dirían en voz alta. En pocas palabras, dice cosas que todo el mundo tiene miedo a expresar. Es decidido y no tienden a rendirse con facilidad";
      }
      
      if ($hero == 'ANDRES' && $clave == 'cuervo' ){
          $amigo="SANTIAGO";
          $flag=true;
          $imagen="imagenes/santiago.jpg";
          $caracteristicas="Es de acción rápida y confían en su poder, por eso no pierden el tiempo pensando en problemas, de hecho, su manera de resolverlos es la acción. Un aspecto negativo de esta actitud, a veces, es la impulsividad y falta de paciencia, además de arriesgarse demasiado. Tampoco soportan equivocarse ni el fracaso.";
      }
      
      if ($hero == 'BETTY' && $clave == 'jesus'  ){
        $amigo="MARTIN";
        $flag=true;
        $imagen="imagenes/martin.jpg";
        $caracteristicas="Es Serio:  posee una personalidad y forma de ver la vida seria. Fidelidad: son personas que, cuando se comprometen o enamoran, apuestan todo por su pareja. Resolutivos: su mente brillante les ayuda a solucionar problemas con facilidad; y por lo tanto, son útiles para cualquier situación adversa.";
      }

      if ($hero == 'MARTA' && $clave == 'flor' ){
        $amigo="SILVINA";
        $flag=true;
        $imagen="imagenes/silvina.jpg";
        $caracteristicas="Es reflexiva, pero sin llegarse a comer demasiado la cabeza. Ella le da vueltas a las cosas y tiene una inteligencia muy analítica, pero no para regodearse en los dramas ni para torturarse. Su objetivo es encontrar una solución.";
      }

      if ($hero == 'MARIANO' && $clave == 'sanlo' ){
        $amigo="OSVALDO";
        $flag=true;
        $imagen="imagenes/osvaldo.jpg";
        $caracteristicas="Se destaca por su gran vitalidad, y por el entusiasmo con el que lo llevan todo en la vida. Sin duda, reconocerás a una mujer de personalidad arrolladora. Su mente no para nunca, es inquieta y curiosa, y siempre está dispuesta a vivir nuevas aventuras.";
      }

      if ($hero == 'MARTIN' && $clave == 'musica' ){
        $amigo="SU";
        $flag=true;
        $imagen="imagenes/su.jpg";
        $caracteristicas="Es distraída y soñadora. Siempre tienen la cabeza en las nubes y les cuesta darse cuenta de que muchas de sus ideas son totalmente inalcanzables. Es por eso que necesitan a alguien que las haga aterrizar. Esta dotadas de una gran empatía y sensibilidad.";
      }
      
      if ($hero == 'OSVALDO' && $clave == 'huracan' ){
        $amigo="BETTY";
        $flag=true;
        $imagen="imagenes/betty.jpg";
        $caracteristicas="Es muy sensible. Hacen lo que esté en su mano por conseguir lo que desean,  cuenta con una profunda conexión con sus sentimientos y su mundo interior, suele ser apasionadas y con gran determinación. Aman intensamente. Cuando se proponen algo, créannos, lo consiguen, sea a nivel profesional o en el amor";
      }

      if ($hero == 'SANTIAGO' && $clave == 'globo' ){
        $amigo="MARTA";
        $flag=true;
        $imagen="imagenes/marta.jpg";
        $caracteristicas="Es distraída y soñadora. Siempre tienen la cabeza en las nubes y les cuesta darse cuenta de que muchas de sus ideas son totalmente inalcanzables. Es por eso que necesitan a alguien que las haga aterrizar. Esta dotadas de una gran empatía y sensibilidad.";
      }
  
      if ($hero == 'SILVINA' && $clave == 'hermosa' ){
        $amigo="ANA";
        $flag=true;
        $imagen="imagenes/ana.jpg";
        $caracteristicas="Se destaca por su gran vitalidad, y por el entusiasmo con el que lo llevan todo enpx la vida. Sin duda, reconocerás a una mujer de personalidad arrolladora. Su mente no para nunca, es inquieta y curiosa, y siempre está dispuesta a vivir nuevas aventuras.";
        }

        if ($hero == 'SU' && $clave == 'linda' ){
          $amigo="ANDRES";
          $flag=true;
          $imagen="imagenes/andres.jpg";
          $caracteristicas="Es sumamente cautivantes, seductor y apasionado, con un disfrute por la vida que los convierte en seres magnéticos. Amantes de la adrenalina del cambio, aspiran alto y van con entusiasmo detrás de sus sueños";
        }
  
        /*if ($hero == 'GRACIELA' && $clave == 'manzana' ){
        $amigo="xxxxx";
        $flag=true;
        $imagen="imagenes/graciela.jpg";
        $caracteristicas="Disfruta de una vida pacífica y organizada, también son conocidas por su dulzura y gran afectuosidad. No tienen dificultad para expresar sus emociones y suelen ser muy empáticas";
      }*/

   
  }else{
    $error="Vuelva a intentarlo, NO ha ingresado los Datos en forma Correcta.";
  }
 
  if ($flag==false){
    $imagen="imagenes/llorando.gif";
    $error=" Atención!! El Password no es el correcto.";
    $mensaje="Vuelva a Intentarlo en caso de Error...";
  }else{
    $error=" Bueniiiiisimoooooo!!!.";
    //$imagen="imagenes/besocorazones.gif";
    //$imagen="<?php  echo $imagen;
    
    $error=" Atención!! A disfrutar con tu amigo, Muchas Felicidades.";
    $mensaje="Feliz Navidad 2023";
  }

  ?>

   <audio src="micancion.mp3" preload="auto" autoplay loop></audio> 
  
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

        <div class="inner cover">
            <img src=<?php echo "\"".$imagen."\""; ?>class="img-responsive" alt="Responsive image" width="190px">
            <h2 class="cover-heading">Su amigo invisible es </h2>
            <h1 class="cover-heading"><?php  echo $amigo; ?></h1>
            <p class="lead"><?php  echo $error; ?></p>
            <p class="lead"><?php  echo $caracteristicas; ?></p>

            <br>
            <p class="lead">
              <a href="participante.php" class="btn btn-lg btn-default"><?php  echo $mensaje; ?></a>
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