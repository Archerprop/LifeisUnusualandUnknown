<?php
//conexion con el servidor y seleccion del rango
  session_start();
 include '../connect.php';
  $sql_r = "SELECT * FROM rango";
  $query = $mysqli->query($sql_r);
  $_SESSION['nickname'] = $_GET['nickname'];
  $sesion = $_SESSION['nickname'];

  if ($sesion == null || $sesion = '') {
    header('location:../login_screen.php?send=0&check=Stand');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <title>Formulario</title>
  <?php require_once"../scripts.php"; ?>
</head>
<body class="font">
  <!--Formulario para registrarse-->
  <header class=" header content">
    <div class="header-video">
      <!--<video src="sources/video/font_5.mp4" id="sm_2" autoplay loop></video>-->
    </div>
    <div class="header-overlay"></div>
      <div class="form_r header">
        <form id="form" method="POST" enctype="multipart/form-data" action="register.php" data-ajax="false">
          <h1 class="register">SimpleIntelligentAssistant</h1>
          <center>
            <div class="row">
              <input type="text" name="nombre" maxlength="20" placeholder="Nombre" class="space" id="name" required>
            </div>
            <div class="row">
              <input type="text" name="apellido" maxlength="20" placeholder="Apellido" class="space" id="surname" required>
            </div>
            <div class="row">
              <input type="text" name="nickname" maxlength="20" placeholder="Nombre de usuario" class="space" id="nickname" required>
            </div>
            <div class="row">
              <input type="number" name="id" maxlength="20" placeholder="Numero de identificacion" class="space" id="id" required>
            </div>
            <div class="row">
              <input type="text" name="password" maxlength="20" placeholder="Contraseña" class="space" id="password" required>
            </div>
            <div class="row">
              <input type="text" name="password-check" maxlength="20" placeholder="Repetir constraseña" class="space check-in" id="password" required>
            </div>
            <div class="row">
              <input type="email" name="correo" placeholder="Correo electronico" class="space" id="email" required>
            </div>
      <!--selector del nivel del usuario-->
            <div class="row">
              <select class="space" name="rango" id="rango" required>
                <option class="space" selected>Elige tu nivel...</option>
                  <?php
                    while ($data = $query->fetch()) {
                  ?>
                <option class="space" value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
                  <?php
                    }
                  ?>
              </select>
            </div>
      <!--archivo imagen de usuario-->
      </center>
          <div class="form-group">
            <div class="upload">
              <!--accept=".jpg,.png,.gif"-->
              <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
              <input type="file" class="file"  name="profile"  onchange="file_view()" id="file_charge">
              <div class="text"><p id="file_update">Selecciona tu imagen de perfil...</p></div>
            </div>
            <div id="image"></div>
            <div class="taker">
              <input type="submit" name="enviar" value="Enviar" class="boton" id="newregister">
              <input type="reset" name="resetear" value="limpiar" class="boton">
            </div>
          </div>
          <div class="return">
            <p class="confirm">Ya estas inscrito? Presiona <a href="../index.php">aqui</a></p>
          </div>
    </form>
  </div>
  </header>
  <p class="copyright">Video by Drew Rae from Pexels</p>
  <script type="text/javascript" src="../js/master.js"></script>
</body>
</html>
<script type="text/javascript">
  function file_view() {
  var file = document.getElementById('file_charge').value;
  document.getElementById('file_update').innerHTML = document.getElementById('file_charge').value;
  }
</script>
