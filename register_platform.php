<?php
//conexion con el servidor y seleccion del rango
 include 'connect.php';
  $sql_r = "SELECT id,nivel FROM rango where nivel=2 or nivel=1 order by nivel ASC";
  $query = mysqli_query($mysqli,$sql_r);
  if (isset($_GET['check-in'])<=1) {

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
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <title>Formulario</title>
  <?php require_once"scripts.php"; ?>
</head>
<body class="font">
  <!--Formulario para registrarse-->
  <header class=" header content">
    <div class="header-video">
      <video src="sources/video/font_5.mp4" id="sm_2" autoplay loop></video>
    </div>
    <div class="header-overlay"></div>
      <div class="form_r header">
        <form id="form" action="register.php" method="post" enctype="multipart/form-data">
          <h1 class="register">SimpleIntelligentAssistant</h1>
          <div class="row">
            <input type="text" name="nombre" maxlength="20" placeholder="Nombre" class="space" id="name">
          </div>
          <div class="row">
            <input type="text" name="apellido" maxlength="20" placeholder="Apellido" class="space" id="surname">
          </div>
          <div class="row">
            <input type="text" name="nickname" maxlength="20" placeholder="Nickname" class="space" id="nickname">
          </div>
          <div class="row">
            <input type="text" name="password" maxlength="20" placeholder="Contraseña" class="space" id="password">
          </div>
          <div class="row">
            <input type="email" name="correo" placeholder="Correo electronico" class="space" id="email">
          </div>
    <!--selector del nivel del usuario-->
          <select class="space" name="rango" id="rango">
            <option class="space">Elige tu nivel...</option>
              <?php
                while ($data = mysqli_fetch_array($query)) {
              ?>
            <option class="space" value="<?php echo $data['id']?>">Level <?php echo $data['nivel']?></option>
              <?php
                }
              ?>
          </select>
    <!--archivo imagen de usuario-->
        <div class="form-group">
          <input type="file" class="file" accept=".jpg,.png,.gif" name="file" onchange="file_view()" id="file_charge" >
          <p id="file_update">Selecciona tu imagen de perfil...</p>
          <div id="image"></div>
        </div>
        <div id="btn">
          <input type="submit" name="enviar" value="Enviar" class="boton" id="newregister">
          <input type="reset" name="resetear" value="limpiar" class="boton">
          <p class="confirm">Ya estas inscrito? Presiona <a href="index.php">aqui</a></p>
        </div>
    </form>
  </div>
  </header>
  <p class="copyright">Video by Drew Rae from Pexels</p>
  <script type="text/javascript" src="js/master.js"></script>
  <script type="text/javascript" src="js/sm.js"></script>
</body>
</html>
<script type="text/javascript">
  function file_view() {
  var file = document.getElementById('file_charge').value;
  document.getElementById('file_update').innerHTML = document.getElementById('file_charge').value;
}
 (function() {
   'use strict'
 var file_url = document.getElementById('file_charge');
 var formData = new FormData();
 file_url.addEventListener('change', function (e) {
   for (var i = 0; i < file_url.files.length; i++) {
     var thumbnail_id = Math.floor( Math.random() * 40000) + '_' + Date.now();
     createThumbnail(file_url, i, thumbnail_id);
     formData.append(thumbnail_id,file_url.files[i]);
   }

   e.target.value = '';
 });
 var createThumbnail = function (file_url,iterator,thumbnail_id) {
   var file_thumbnail = document.createElement('div');
   file_thumbnail.classList.add('file_thumbnail', thumbnail_id);
   file_thumbnail.dataset.id = thumbnail_id;
   file_thumbnail.setAttribute('style', `background-image: url(${ URL.createObjectURL(file_url.files[iterator])})`);
   document.getElementById('image').appendChild(file_thumbnail);
   closeThumbnail(thumbnail_id);
 }
 var closeThumbnail = function (thumbnail_id) {
   var closer = document.createElement('div');
   closer.classList.add('close-image');
   closer.innerText ='X';
   document.getElementsByClassName(thumbnail_id)[0].appendChild(closer);
 }

 document.body.addEventListener('click', function (e) {
   if (e.target.classList.contains('close-image')) {
     e.target.parentNode.remove();
     formData.delete(e.target.parentNode.dataset.id);
   }
 });
})();
</script>
