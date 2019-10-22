<?php
  $page = 2;
  $level = 'admin';
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
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "menu";include '../menu_bar.php'; ?>
    </div>
  </div>
   <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <br>
      <?php
      if ( $link == 'menu') {
      echo "<iframe src='../new.pdf' width='800' height='800'></iframe>";
    }elseif ($link == 'config') {
      include '../config.php';
    }
      ?>
    </div>
  </div>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/particles.js"></script>
  <script type="text/javascript" src="../js/particulas.js"></script>
  <script type="text/javascript" src="../js/sm.js"></script>
</body>
</html>
