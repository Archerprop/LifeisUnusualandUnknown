<?php
//archivo de conexion
  include 'connect.php';
  session_start();
  //variables
  $correo = $_POST['correo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $password =sha1($_POST['password']);
  $nickname = $_POST['nickname'];
  $rango = $_POST['rango'];
  $_SESSION['nickname'] = $nickname;
  $name = $_FILES['file']['name'];
  $save = $_FILES['file'] ['tmp_name'];
  $file_url = 'sources/profiles/'.$nickname.'/'.$name;
  if (!file_exists('sources/'.'profiles/'.$_SESSION['nickname'])) {
    mkdir('sources/'.'profiles/'.$_SESSION['nickname'],0777, true);
    if (file_exists('sources/'.'profiles/'.$_SESSION['nickname'])) {
      if (move_uploaded_file($save,'sources/profiles/'.$nickname .'/'.$name)) {
        echo "creado archivo";
      }
    }
  }else {
    if (move_uploaded_file($save,'sources/profiles/'.$nickname.'/'.$name)) {
    }
  }
    //Envio de informacion
    $sql = "INSERT INTO usuario (correo, nombre, apellido,clave,nickname,rango,file) VALUES ('$correo','$nombre','$apellido','$password','$nickname','$rango','$file_url')";
    $query = mysqli_query($sql);
    if ($mysqli->query($sql) === TRUE) {
        echo "Usuario creado";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  mysqli_close($mysqli);
   header('location:index.php');
?>
