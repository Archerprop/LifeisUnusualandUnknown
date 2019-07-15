<?php
//archivo de conexion
  include 'connect.php';
  session_start();
  //variables
  $correo = $_POST['correo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $id = $_POST['id'];
  $password =md5($_POST['password']);
  $password_check=md5($_POST['password-check']);
  $nickname = $_POST['nickname'];
  $rango = $_POST['rango'];
  $_SESSION['nickname'] = $nickname;
  if ($password == $password_check) {
  $name = 'sources/profiles/'.$nickname.'/'.basename($_FILES["file"]["name"]);
  $file_url = $name;
    if (!file_exists('sources/'.'profiles/'.$nickname)) {
       mkdir('sources/'.'profiles/'.$_SESSION['nickname'],0777, true);
      if (file_exists('sources/'.'profiles/'.$nickname)) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"],$name)) {
          echo "creado archivo";
        }
      }
    }else {
      if (move_uploaded_file($_FILES["file"]["tmp_name"],$name)) {
        echo "creado archivo";
      }
    }
      //Envio de informacion
      $sql = "INSERT INTO usuario (correo,nombre,apellido,clave,nickname,rango,file,id) VALUES ('$correo','$nombre','$apellido','$password','$nickname','$rango','$file_url',$id)";
      $query = mysqli_query($sql);
      if ($mysqli->query($sql) === TRUE) {
          echo "Usuario creado";
      } else {
          echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
    mysqli_close($mysqli);
    session_destroy();
    header('location:index.php');
  }else {
    header('location:register_platform.php');
  }
?>
