<?php
  session_start();
  if(isset($_SESSION['nickname']))
  $sesion = $_SESSION['nickname'];
  else{
  $sesion = null;
  }
  if ($sesion == null || $sesion = '') {
    print"<script>alert('Hola mundo!')</script>";
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
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/particles.js"></script>
  <script type="text/javascript" src="../js/sm.js"></script>
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "user";include '../menu_bar.php'; ?>
    </div>
  </div>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <br>
      <div class="box_menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
        <br>
        <table class="table_menu">
          <tr>
            <th><button  class="btn btn-outline-success my-2 my-sm-0 btn_admin" id="list_user_teacher">profesor</button></th>
            <th><button  class="btn btn-outline-success my-2 my-sm-0 btn_admin" id="list_user_student">estudiante</button></th>
            <th><button  class="btn btn-outline-success my-2 my-sm-0 btn_admin" id="list_user_admin">administrador</button></th>
        </table>
        <iframe src="" width="90%" height="500px" id="table"></iframe>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#list_user_teacher').on('click', function() {
        document.getElementById("table").src="website_admin/user/list/list_user_teacher.php";
      });
      $('#list_user_student').on('click', function() {
        document.getElementById("table").src="website_admin/user/list/list_user_student.php";
      });
      $('#list_user_admin').on('click', function() {
        document.getElementById("table").src="website_admin/user/list/list_user_admin.php";
      });
    });
  </script>
  <script type="text/javascript" src="../js/particulas.js"></script>
</body>
</html>
