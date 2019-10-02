<?php
session_start();
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
  <title><?php echo $_SESSION['nickname']; ?></title>
</head>
<body>
  <div class="box_code">
    <form class="code_form" action="validate_code.php" method="post">
      <h1>Bienvenido administrador: <?php echo $_SESSION['nickname'];?></h1>
      <label for="code">Codigo de seguridad:</label>
      <div class="row code">
        <input type="text" max="6" name="code_admin" id="code" placeholder="Codigo" required class="admin_space">
      </div>
      <div class="row code">
        <input type="submit" value="Verificar" class="boton">
      </div>
    </form>
  </div>
</body>
</html>
