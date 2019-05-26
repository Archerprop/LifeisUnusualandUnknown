<?php
  include 'connect.php';
  session_start();
  $nickname = $_POST['nickname'];
  $clave = $_POST['clave'];
  $clave = sha1($clave);
  $_SESSION['nickname'] = $nickname;
  print $sql_l = "SELECT nickname FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query_c = mysqli_query($mysqli,$sql_l);
  $data = mysqli_num_rows($query_c);
  if ($data > 0) {
        header("location:load.php");
  }else {
        header("location:index.php");
  }
  mysqli_free_result($query_c);
  mysqli_close($mysqli);
?>
