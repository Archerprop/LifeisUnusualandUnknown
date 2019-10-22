<?php
  session_start();
  if(isset($_SESSION['nickname']))
  $sesion = $_SESSION['nickname'];
  else{
  $sesion = null;
  }
  if ($sesion == null || $sesion = '') {
    header("Location:../index.php");
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
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/particles.js"></script>
  <script type="text/javascript" src="../js/particulas.js"></script>
  <script type="text/javascript" src="../js/sm.js"></script>
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "register";   $page = 2;;include '../menu_bar.php'; ?>
    </div>
  </div>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <div class='form_box'>
        <iframe src="register_platform.php" frameborder="0" style='width:100%;height:100%;'>
        </iframe>
      </div>
    </div>
  </div>
</body>
</html>
