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
  $profile = $_SESSION['nickname'];
  $name = $_FILES['profile']['name'];
  $tmp_name = $_FILES['profile']['tmp_name'];
  $error = $_FILES['profile']['error'];
  $size = $_FILES['profile']['size'];
  $max_size = $_POST['MAX_FILE_SIZE'];
  $type = $_FILES['profile']['type'];
  $ruta = "sources/profiles/".$profile."/".$name;
  $sth = $mysqli->prepare("SELECT * FROM usuario WHERE nickname='$nickname'");
  $sth->execute();
  $result = $sth->fetchAll();
  if ($password == $password_check) {
    if ($result) {
        echo 'El usuario existe!';
      }else {
        //Envio de informacion
        print_r($_POST);
        $query = $mysqli->prepare("INSERT INTO usuario (correo,nombre,apellido,clave,nickname,rango,file,id) VALUES ('$correo','$nombre','$apellido','$password','$nickname','$rango','$ruta',$id)");
        $query->execute();
          if (!file_exists('sources/'.'profiles/'.$profile.'/')) {
             mkdir('sources/'.'profiles/'.$nickname,0777,true);
            if (file_exists('sources/'.'profiles/'.$nickname.'/')) {
              if (move_uploaded_file($tmp_name,$ruta)) {
                echo "creado archivo";
              }else{
                print $_FILES['profile']['error'];
              }
            }
          }else {
            if (move_uploaded_file($tmp_name,$ruta)) {
              echo "creado archivo";
            }else {
              print "<h1>".$_FILES['profile']['error']."</h1>";
            }
          }
      session_destroy();
      header('location:index.php');
    }
  }else {
    header('location:register_platform.php');
  }
?>
