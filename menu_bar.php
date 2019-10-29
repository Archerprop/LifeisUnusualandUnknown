<?php
  include 'connect.php';
  $name = $_SESSION['nickname'];
  $sql = "SELECT * FROM usuario WHERE nickname='".$name."'";
  $check = $mysqli->query($sql);
  $value = $check->fetch();
?>
<div id="menu" style="z-index:1">
  <nav class="navbar navbar-expand-lg navbar-<?php echo $value['theme'];?> bg-<?php echo $value['theme'];?>" style ='border-bottom: 1px solid black;'>
    <a class="navbar-brand" href="<?php if ($value['rango'] == 1){ echo '/sia/admin/admin_menu.php?nickname='.$name;}elseif($value['rango'] == 2) {echo '/sia/profesor/teacher_menu.php?nickname='.$name;}elseif($value['rango'] == 3){echo '/sia/estudiante/student_menu.php?nickname='.$name;}?>"><?php echo $_SESSION['nickname']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php if ($value['rango'] == 1){ echo '/sia/admin/admin_menu.php?nickname='.$name;}elseif($value['rango'] == 2) {echo '/sia/profesor/teacher_menu.php?nickname='.$name;}elseif($value['rango'] == 3){echo '/sia/estudiante/student_menu.php?nickname='.$name;}?>">Inicio <span class="sr-only"></span></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="#" onclick="">Notificaciones</a>
        </li>
        <li class="nav-item dropdown">-->
          <?php
            if ($value['rango'] == 1) {
           ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="register_menu.php">Registros</a>
              <a class="dropdown-item" href="user_menu.php">Usuarios</a>
              <a class="dropdown-item" href="platform_menu.php">Plataformas</a>
              <a class="dropdown-item" href="#">Buscador</a>
            </div>
             <?php
              }elseif ($value['rango']==2) {
                ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/sia/folder.php">Materias</a>
              <a class="dropdown-item" href="user_menu.php">Usuarios</a>
            </div>
             <?php
              }elseif ($value['rango']==3) {
              ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/sia/folder.php">Materias</a>
              <a class="dropdown-item" href="user_menu.php">Usuarios</a>
            </div>
             <?php
             }
             ?>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proximamente</a>
        </li>
      </ul>
      <div class="overlay">
        <img class="btn_profile" src="<?php if ($value['file'] == ''){echo '/sia/images/img.png';}elseif($value['file'] != ''){echo '/sia/'.$value['file']; } ?>" onclick="menu()">
      </div>
    </div>
  </nav>
</div>
<!--<div class='add' id='advice'></div>-->
<div id="menu_profile" style=" background-color: <?php echo  $value['color'];?>; width: 250px;height: 0px; transition: 0.5s;position: fixed; right: 0px; top: 56px; border-bottom-left-radius: 7px; border: 1px solid rgba(110, 110, 110, 0.45);">
  <div id="content" style="display:none; transition: display 1s">
    <div class="image"><img class="image_profile" src="<?php if ($value['file'] == ''){echo '/sia/images/img.png';}elseif($value['file'] != ''){echo '/sia/'.$value['file']; } ?>"><a class="button_user" href="../close_connect.php"></div>
    <div class="row_user"><a class="button_user" href="/sia/config.php" >configuracion</a></div>
   <div class="row_user"><a class="button_user" href="<?php echo '/sia/close_connect.php';?>">Cerrar sesion</a></div>
 </div>
</div>
<script type="text/javascript">
  function menu(){
    var obj = document.getElementById('menu_profile');
    var content = document.getElementById('content');
    if (obj.style.height=="0px") {
      obj.style.height="250px";
      setTimeout(function() {content.style.display="block"},300);
    }else if (obj.style.height=="250px") {
      obj.style.height="0px";
      setTimeout(function() {content.style.display="none"},100);
    }
  }
</script>
