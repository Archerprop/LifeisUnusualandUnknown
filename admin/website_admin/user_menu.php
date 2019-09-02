<?php
  session_start();
  if(isset($_SESSION['nickname']))
  $sesion = $_SESSION['nickname'];
  else{
  $sesion = null;
  }
  if ($sesion == null || $sesion = '') {
    print"<script>alert('Hola mundo!')</script>";
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../../css/master.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/jquery-ui.js"></script>
  <title>SimpleIntelligentAssistant</title>
</head>
<body>
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <script type="text/javascript" src="../../js/particles.js"></script>
  <script type="text/javascript" src="../../js/particulas.js"></script>
  <script type="text/javascript" src="../../js/sm.js"></script>
  <audio id="sm_2" src="../../sources/audio/sm_1.mp3" autoplay="autoplay" loop="loop"></audio>
  <div class="content">
    <div class="vacio" id="particles-js">

      <?php $link = "user";include '../../menu_bar.php'; ?>
    </div>
  </div>
<div id="fb-root"></div>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
    </div>
    <!--<div id="fb-comment">
    <div class="fb-comments" data-width="100%" data-mobile="Auto-detected" data-href="http://127.0.0.1:3000/index.html" data-numposts="5"></div>
  </div>-->
  </div>
</body>
</html>
