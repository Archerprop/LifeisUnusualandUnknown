<?php
  include 'connect.php';
  session_start();
  $nickname = $_POST['nickname'];
  $clave = $_POST['clave'];
  $clave = md5($clave);
  $_SESSION['nickname'] = $nickname;
  $sql_l = "SELECT COUNT(*) FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query_c = $mysqli->prepare($sql_l);
  $query_c->execute();
  $data = $query_c->fetchColumn();
  if ($data > 0) {
        //header("location:load.php");
        print "funciona";
        print $data;
  }else {
        //header("location:index.php");
        print "no funciona";
        print $data;
  }
?>
