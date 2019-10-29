<?php
  session_start();
  if ($_SESSION['delete'] == null) {
   $_SESSION['delete'] = null;
  }elseif ($_SESSION['delete'] == 1) {
    header('location:index.php');
  }elseif ($_SESSION['delete'] == '' || $_SESSION['delete'] == null){
    $sesion = $_SESSION['nickname'];   
  if ($sesion == null || $sesion = '') {
    header('location:index.php');
    session_destroy();
    die();
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
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
<body>
<script src="/sia/js/close.js"></script>
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "menu";include 'menu_bar.php' ?>
    </div>
  </div>
   <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <iframe class='box_config' id="box_config" src="" style="border: transparent"></iframe>
      <div class='column'>
  <div class='btn_config'><a href="#info" id="info">Acerca de</a></div>
  <div class='btn_config'><a href="#style" id="style">Personalización</a></div>
  <div class='btn_config'><a href="#account" id="account">Cuenta</a></div>
  <div class='btn_config'><a href="#delete" id="delete">Borrar cuenta</a></div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/particles.js"></script>
  <script type="text/javascript" src="js/particulas.js"></script>
  <script type="text/javascript" src="js/sm.js"></script>
  <script type="text/javascript">
  $(document).ready(function(e) {
  $('#info').on('click', function() {
  document.getElementById("box_config").src="selection.php?config=info";
  });
  $('#style').on('click', function() {
  document.getElementById("box_config").src="selection.php?config=style";
  });
  $('#account').on('click', function() {
  document.getElementById("box_config").src="selection.php?config=account";
  });
  $('#delete').on('click', function() {
  document.getElementById("box_config").src="selection.php?config=delete";
  });
  });
  </script>
</body>
</html>