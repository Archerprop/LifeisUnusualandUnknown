<?php
  session_start();
  $sesion = $_SESSION['nickname'];
  if ($sesion == null || $sesion = '') {
    header('location:../index.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/master.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <title>SimpleIntelligentAssistant</title>
</head>
<body>
  <audio id="sm_2" src="../sources/audio/sm_1.mp3" autoplay="autoplay" loop="loop"></audio>
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "menu";include '../menu_bar.php'; ?>
    </div>
  </div>
<div id="fb-root"></div>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <br>
      <h3>¡Bienvenido a nuestra pagina web!</h3>
      <p class="text_p">Este ambiente tiene como objetivo mostrarte diferentes conocimientos tales como:</p><br>
      <ul>
      <li><p class="text_p">Registros</p></li>
      <li><p class="text_p">Usuarios</p></li>
      <li><p class="text_p">danza</p></li>
      <li><p class="text_p">redes sociales</p></li>
      </ul>
      <p>De acuerdo con el nombre de nuestra pagina no hay ninguna relacion entre algun tema, sino que se enfoca
      en el tema que se habla, por esa misma razon nos llamamos "RandomInterestingThings" expresamente mostrando cosas interesantes sobre diversas cosas.</p>
      <div id="img-3">
        <a href="websites/video.html"><img src="img/img-4.png" alt="Aqui" id="img-4"></a>
        <img src="img/img-3.gif" alt="¡Oprime aqui!" id="img-3">
      </div>
    </div>
    <div id="fb-comment">
    <div class="fb-comments" data-width="100%" data-mobile="Auto-detected" data-href="http://127.0.0.1:3000/index.html" data-numposts="5"></div>
    </div>
  </div>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/particles.js"></script>
  <script type="text/javascript" src="../js/particulas.js"></script>
  <script type="text/javascript" src="../js/sm.js"></script>
</body>
</html>
