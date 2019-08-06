<?php
  include 'connect.php';
  session_start();
  //variables
  $nickname = $_POST['nickname'];
  $clave = $_POST['clave'];
  $clave = md5($clave);
  $_SESSION['nickname'] = $nickname;
  //comprobacion si la cuenta existe en la base de datos
  $sql_l = "SELECT COUNT(*) FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query_c = $mysqli->prepare($sql_l);
  $query_c->execute();
  $data = $query_c->fetchColumn();
  //comprobacion si la cuenta esta activa
  $validation = "SELECT status FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query = $mysqli->query($validation);
  $value = $query->fetch();
  echo $value['status'];
  $validate = $value['status'];
  if ($data > 0) {
    if ($value['status']=='Enabled') {
      header("location:load.php");
      print "funciona<br>";
      print $data;
    }else {

     header("location:index.php?check=$validate");
    }
  }else {
        header("location:index.php");
        print "no funciona";
        print $data;
  }
?>
