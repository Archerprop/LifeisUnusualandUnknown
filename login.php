<?php
  include 'connect.php';
  session_start();
  //variables
  $clave = $_POST['clave'];
  $clave = md5($clave);
  $_SESSION['nickname'] = $nickname;
  $nickname = $_POST['nickname'];
  //comprobacion si la cuenta existe en la base de datos
  $sql_l = "SELECT COUNT(*) FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query_c = $mysqli->prepare($sql_l);
  $query_c->execute();
  $data = $query_c->fetchColumn();
  //comprobacion si la cuenta esta activa
  $validation = "SELECT * FROM usuario WHERE nickname='".$nickname."' and clave='$clave'";
  $query = $mysqli->query($validation);
  $value = $query->fetch();
  //echo $value['status'].'<br>';
  //echo $value['rango'];
  if ($data > 0) {
    if ($value['status']=='Enabled') {
      //redireccion por cargo
      $rank = 1;
      if ($value['rango']==$rank) {
        header("location:admin/admin_session.php?nickname=".$nickname);
      }elseif ($value['rango']==$rank+1) {
        header("location:profesor/teacher_menu.php?nickname=".$nickname);
        print "funciona<br>";
        print $data;
      }elseif ($value['rango']==$rank+2) {
        header("location:estudiante/student_menu.php?nickname=".$nickname);
        print "funciona<br>";
        print $data;
      }
    }else {

     header("location:login_screen.php?check=$validate&send=1");
    }
  }else {
        header("location:index.php");
        print "no funciona";
        print $data;
  }
?>
