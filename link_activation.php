<?php
  include 'connect.php';
  echo $_GET['link'];
  //activamos el Usuario
  $status = 'Enabled';
  $code = $_GET['link'];
  $sth = $mysqli->prepare("UPDATE usuario SET status='$status' WHERE id_active_code='$code'");
  $sth->execute()or die("a ocurrido un error");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Su cuenta esta activa!!!</h1>
  </body>
</html>
