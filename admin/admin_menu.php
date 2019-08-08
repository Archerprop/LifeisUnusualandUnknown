<?php
  session_start();
  $sesion = $_SESSION['nickname'];
  if ($sesion == null || $sesion = '') {
    header('location:index.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/master.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <title>SimpleIntelligentAssistant</title>
</head>
<body>
  <audio id="sm_2" src="../sources/audio/sm_1.mp3" autoplay="autoplay" loop="loop"></audio>
  <div class="content">
    <div class="vacio" id="particles-js">
      <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><?php echo $_SESSION['nickname']; ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="websites/video.html">Videos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="website_admin/register_menu.php">Registros</a>
                  <a class="dropdown-item" href="website_admin/register_menu.php">Usuarios</a>
                  <a class="dropdown-item" href="website_admin/register_menu.php">Juegos</a>
                  <a class="dropdown-item" href="website_admin/register_menu.php">Redes sociales</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proximamente</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <a class="btn btn-primary" href="../close_connect.php">Cerrar sesion</a>
        </nav>
      </div>
    </div>
  </div>
<div id="fb-root"></div>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <h3>¡Bienvenido a nuestra pagina web!</h3>
      <p class="text_p">Este ambiente tiene como objetivo mostrarte diferentes conocimientos tales como:</p><br>
      <ul>
      <li><p class="text_p">Registros</p></li>
      <li><p class="text_p">Usuarios</p></li>
      <li><p class="text_p">danza</p></li>
      <li><p class="text_p">redes sociales</p></li>
      </ul>
      <p>De acuerdo con el nombre de nuestra pagina no hay ninguna relacion entre algun tema, sino que se enfoca
      en el tema que se habla, por esa misma razon nos llamamos "RandomInterestingThings" expresamente mostrando cosas interesantes sobre diversas cosas.</p>
      <div id="img-3">
        <a href="websites/video.html"><img src="img/img-4.png" alt="Aqui" id="img-4"></a>
        <img src="img/img-3.gif" alt="¡Oprime aqui!" id="img-3">
      </div>
    </div>
    <div id="fb-comment">
    <div class="fb-comments" data-width="100%" data-mobile="Auto-detected" data-href="http://127.0.0.1:3000/index.html" data-numposts="5"></div>
    </div>
  </div>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/particles.js"></script>
  <script type="text/javascript" src="../js/particulas.js"></script>
  <script type="text/javascript" src="../js/sm.js"></script>
</body>
</html>
