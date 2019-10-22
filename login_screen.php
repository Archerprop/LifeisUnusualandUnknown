<?php
  //adquirimos el comprobante
  if ($_GET['send'] == 0) {
    $_GET['check'] = null;
    $validate = $_GET['check'];
  }elseif ($_GET['send'] == 1) {
    $validate = $_GET['check'];
  }elseif($_GET['send'] > 1){
    $_GET['check'] = null;
    $validate = $_GET['check'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
  <title>SimpleIntelligentAssistant</title>
  <?php require_once"scripts.php"; ?>
</head>
<body class="font">
  <!--<audio id="sm_2" src="sources/audio/sm_3.mp3" autoplay="autoplay" loop="loop"></audio>-->
  <header class=" header content">
    <div class="header-video">
      <!--<video src="sources/video/font_7.mp4" id="sm_2" autoplay loop preload="auto"></video>-->
    </div>
    <div class="header-overlay"></div>
    <div class="form_r_l header">
      <form class="space" action="login.php" method="post">
        <h1 class="login"><strong>Ingresar</strong></h1>
        <div class="row">
          <input type="text" name="nickname" placeholder="Usuario" class="space_l" id="user">
        </div>
        <div class="row">
        <input type="password" name="clave" placeholder="Contraseña" class="space_l" id="password">
        </div>
        <div class="row_text">
          <?php
          if ($validate!='') {
            if ($_GET['check']=='Disabled') {
              echo "<p>El usuario no esta activado!!</p>";
            }
          }
          ?>
        </div>
        <div class="taker_l">
          <input type="submit" value="Ingresar" class="size" id="btn_login">
        </div>
        <!--<div class="return_l">
          //<p class="confirm">No estas inscrito? Presiona <a href="register_platform.php">aqui</a></p>
        </div>-->
      </form>
    </div>
  </header>
  <p class="copyright">Video by Drew Rae from Pexels</p>
  <script type="text/javascript" src="js/sm.js"></script>
</body>
</html>
