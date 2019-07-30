<?php

  $result = null;
  $name = $_FILES['profile']['name'];
  $tmp_name = $_FILES['profile']['tmp_name'];
  $error = $_FILES['profile']['error'];
  $size = $_FILES['profile']['size'];
  $max_size = $_POST['MAX_FILE_SIZE'];
  $type = $_FILES['profile']['type'];

  if ($error) {

    $result = 'Ha habido un error '.$error;

  }elseif ($size > $max_size) {

    $result = 'Es demasiado grande';

  }elseif ($type != 'image/png' && $type != 'image/jpeg' && $type != 'image/gif') {

    $resultado = 'No se permite este tipo de archivo';

  }else {
    $ruta = "../sources/profiles/$name";
    move_uploaded_file($tmp_name,$ruta);
    $result ='La imagen de perfil '.$name.' se a guardado';
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <strong><?php echo $result; ?></strong>
  </body>
</html>
