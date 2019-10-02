<?php
session_start();
  include 'connect.php';
  $name = $_SESSION['nickname'];
  $sql = "SELECT * FROM usuario WHERE nickname='".$name."'";
  $check = $mysqli->query($sql);
  $value = $check->fetch();
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/master.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <title>SimpleIntelligentAssistant</title>
</head>
<body style='background-color: #ffffff'>
<div id="menu" style="z-index:1">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin_menu.php"><?php echo $_SESSION['nickname']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin_menu.php">Inicio <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="websites/video.html">Notificaciones</a>
        </li>
        <li class="nav-item dropdown">
          <?php
            if ($value['rango'] == 1) {
           ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="register_menu.php">Registros</a>
              <a class="dropdown-item" href="user_menu.php">Usuarios</a>
              <a class="dropdown-item" href="platform_menu.php">Plataformas</a>
              <a class="dropdown-item" href="#">Buscador</a>
            </div>
          <?php
            }elseif ($value['rango']==2) {
              echo "eres un profesor";
              die();
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proximamente</a>
        </li>
      </ul>
      <div class="overlay">
        <img class="btn_profile" src="<?php echo '/sia/'.$value['file'] ?>" onclick="menu()">
      </div>
    </div>
  </nav>
</div>
<div id="menu_profile" style=" background-color: #ffffff; width: 250px;height: 0px; transition: 0.5s;position: fixed; right: 0px; top: 56px; border-bottom-left-radius: 7px; border: 1px solid rgba(110, 110, 110, 0.45);">
  <div id="content" style="display:none; transition: display 1s">
    <div class="image"><img class="image_profile" src="<?php echo '/sia/'.$value['file'] ?>"><a class="button_user" href="../close_connect.php"></div>
    <div class="row_user"><a class="button_user" href="../config.php" >configuracion</a></div>
   <div class="row_user"><a class="button_user" href="close_connect.php">Cerrar sesion</a></div>
 </div>
</div>
<script type="text/javascript">
  function menu(){
    var obj = document.getElementById('menu_profile');
    var content = document.getElementById('content');
    if (obj.style.height=="0px") {
      obj.style.height="250px";
      setTimeout(function() {content.style.display="block"},300);
    }else if (obj.style.height=="250px") {
      obj.style.height="0px";
      setTimeout(function() {content.style.display="none"},100);
    }
  }
</script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>