<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
  <title>SimpleIntelligentAssistant</title>
</head>
<body class="font">
  <!--<audio id="sm_2" src="sources/audio/sm_3.mp3" autoplay="autoplay" loop="loop"></audio>-->
  <header class=" header content">
    <div class="header-video">
      <video src="sources/video/font_7.mp4" id="sm_2" autoplay loop preload="auto"></video>
    </div>
    <div class="header-overlay"></div>
    <div class="form_r_l header">
      <form class="space" action="login.php" method="post">
        <h1 class="login"><strong>Ingresar</strong></h1>
        <input type="text" name="nickname" placeholder="Usuario" class="space_l" id="user">
        <input type="password" name="clave" placeholder="Contraseña" class="space_l" id="password">
        <input type="submit" value="Ingresar" class="btn_login" id="btn_login">
        <div class="btn_login">
        <span><a href="register_platform.php" style="text-decoration:none;">registrarse</a></span>
        </div>
      </form>
    </div>
  </header>
  <p class="copyright">Video by Drew Rae from Pexels</p>
  <script type="text/javascript" src="js/sm.js"></script>
</body>
</html>
