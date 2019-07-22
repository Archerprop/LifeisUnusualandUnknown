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
    $name_first = '/'.'sources/'.'profiles/'.$nickname.'/';
  print $name = $name_first.basename($_FILES["upload_file"]["name"]);
  $file_url = $name;
    if (!file_exists('sources/'.'profiles/'.$nickname.'/')) {
       mkdir('sources/'.'profiles/'.$nickname,0777,true);
      if (file_exists('sources/'.'profiles/'.$nickname.'/')) {
        if (move_uploaded_file($_FILES['upload_file']['tmp_name'],$name)) {
          echo "creado archivo";
        }else{
          print $_FILES['upload_file']['error'];
        }
      }
    }else {
      if (move_uploaded_file($_FILES["upload_file"]["tmp_name"],$name)) {
        echo "creado archivo";
      }else {
        print "<h1>".$_FILES['upload_file']['error']."</h1>";
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
    //header('location:index.php');
  }else {
    header('location:register_platform.php');
  }
?>
