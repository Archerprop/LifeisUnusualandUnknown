<div id="menu">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['nickname']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php if ($link=='menu') {echo "#";}else { echo "../admin_menu.php";} ?>">Inicio <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="websites/video.html">Videos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php if($link!='register' && $link!='menu') {echo 'register_menu.php';}elseif($link=='menu') {echo 'website_admin/register_menu.php';}else { echo "#";}?>">Registros</a>
            <a class="dropdown-item" href="<?php if($link!='user' && $link!='menu') {echo 'user_menu.php';}elseif($link=='menu') {echo 'website_admin/user_menu.php';}else { echo "#";}?>">Usuarios</a>
            <a class="dropdown-item" href="<?php if($link!='platform' && $link!='menu') {echo 'platform_menu.php';}elseif($link=='menu') {echo 'website_admin/platform_menu.php';}else { echo "#";}?>">Plataformas</a>
            <a class="dropdown-item" href="<?php if(isset($link)) {echo '#';}else {echo '#';}?>">...</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proximamente</a>
        </li>
      </ul>
      <a class="btn btn-primary" href="../close_connect.php">Cerrar sesion</a>
    </div>
  </nav>
</div>
