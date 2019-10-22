,<?php
//archivo de conexion
  include '../connect.php';
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
  if ($name != "") {
    $ruta = "sources/profiles/".$profile."/".$name;
  }else {
    $ruta = null;
  }
  //codigo registro
  $sth = $mysqli->prepare("SELECT * FROM usuario WHERE nickname='$nickname'");
  $sth->execute();
  $result = $sth->fetchAll();
  if ($password == $password_check) {
    if ($result) {
        echo 'El usuario existe!';
      }else {
        //Generador de codigo de activacion
        $string = "";
        $chance = "1234567890abcdefghijklmnopqrstuvwxyz_";
        $i = 0;
        while ($i < 23) {
          $char = substr($chance, mt_rand(0, strlen($chance)-1),1);
          $string .= $char;
          $i++;
        }
        echo $string."<br>";
        //generador Codigo de admin en caso de ser admin
        //$code = "";
        //$mix = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        //$a = 0;
        //while ($a < 6) {
          //$mode = substr($mix, mt_rand(0, strlen($mix)-1),1);
          //$code .= $mode;
          //$a++;
        //}
        //echo $code."<br>";
        //variables Comprobacion
          $status = 'Disabled';
        //Envio de informacion
        print_r($_POST);
        $query = $mysqli->prepare("INSERT INTO usuario (correo,nombre,apellido,clave,nickname,rango,file,id,id_active_code,status) VALUES ('$correo','$nombre','$apellido','$password','$nickname','$rango','$ruta',$id,'$string','$status')");
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
          //enviar Correo
          $para = $_POST['correo'];

          $asunto = "Link de activacion";

          $mensaje = "<html lang='es'>"
                    ."<head>"
                    ."<title>Link de activacion del Usuario</title>"
                    ."<meta charset='utf-8'/>"
                    ."</head>"
                    ."<body>"
                    ."Gracias por usar nuestro servicios, si desea acceder, debe activar su "
                    ."usuario haciendo link en el siguiente enlace: <br>"
                    ."<a href='http://localhost/sia/link_activation.php?link=$string'>"
                    ."Activar</a>";
          $mensaje  .="</body>"
                    ."</html>";
          //Para enviar en codigo html esta la cabecera
          $cabeceras  = 'MIME-Version: 1.0'."\r\n";
          $cabeceras .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
          //otras cabeceras
          $cabeceras .='From: Cristian Marin B <hungryheavenworld@gmail.com>'."\r\n";
          //Se envia el mensaje
          mail($para, $asunto, $mensaje, $cabeceras);
      //destruccion de sesion
      session_destroy();
      header('location:register_platform.php');
    }
  }else {
    header('location:register_platform.php');
  }
?>
