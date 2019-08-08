<?php
  session_start();
  include '../connect.php';
  //variables
  $code_admin = $_POST['code_admin'];
  $user = $_SESSION['nickname'];
  //revisamos si hay Codigo
  print $sql_l = "SELECT code_admin_db FROM usuario WHERE nickname='$user'";
  $query_c = $mysqli->prepare($sql_l);
  $query_c->execute();
  $data = $query_c->fetchColumn();
  print_r($data."<br>");
  if ($code_admin == $data) {
    //redireccion
    header("location:admin_menu.php?nickname=".$user);
  }else {
    header("location:admin_session.php?nickname=".$user."&&error=1");
  }

?>
