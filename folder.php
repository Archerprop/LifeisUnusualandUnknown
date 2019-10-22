<?php
session_start();
  $sesion = $_SESSION['nickname'];
  if ($sesion == null || $sesion = '') {
    header('location:login_screen.php?send=0&check=Stand');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/master.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <title>SimpleIntelligentAssistant</title>
</head>
<body>
  <div class="content">
    <div class="vacio" id="particles-js">
      <?php $link = "menu"; include 'menu_bar.php';?>
    </div>
  </div>
  <div id="container">
    <div id="body">
      <h1>Bienvenido <?php echo $_SESSION['nickname'];  ?></h1>
      <div id="uploaded_file"></div>
      <div class="file_drag_area">
        Subir archivo
      </div>
      <div class='folder'>
        <?php
          $nick = $_SESSION['nickname'];
          if (file_exists('sources/'.'profiles/'.$nick.'/'.'upload/')) {
            $open= opendir("sources/profiles/$nick/upload/");
            $i= 0;
            while (false !=($name = readdir($open))) {
                $i++;
                $file_info = pathinfo('sources/'.'profiles/'.$nick.'/'.'upload/'.$name);
                $file_type = $file_info['extension'];
                $file_name = $file_info['filename'];
                if($name != "." && $name != ".."){
        ?>
          <div class='icon'><img src='<?php if($file_type == 'docx'){echo "images/logo_word.png";}elseif ($file_type == 'pptx') {echo "images/logo_powerpoint.png";}elseif ($file_type == 'png' || $file_type == 'jpg' || $file_type == 'jepg'){echo "sources/profiles/".$nick."/upload/".$name; } ?>' style='width:100%'><p style='font-size: 10px;'><?php echo $file_name;?></p><br><p></p><br></div>
          <?php
            }
          }
        }
        ?>
      </div> 
    </div>
  </div>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/particles.js"></script>
  <script type="text/javascript" src="js/particulas.js"></script>
  <script type="text/javascript" src="js/sm.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('.file_drag_area').on('dragover', function() {
           $(this).addClass('file_drag_over');
           return false; 
        });
        $('.file_drag_area').on('dragleave', function() {
           $(this).removeClass('file_drag_over');
           return false; 
        });
        $('.file_drag_area').on('drop', function(e) { 
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            var formData = new FormData();
            var files_list = e.originalEvent.dataTransfer.files;
            console.log(files_list);
            for(var i=0; i<files_list.length; i++)
            {
                formData.append('file[]', files_list[i]);
            }
            console.log(formData);
            $.ajax({
                url:"upload.php",
                method:"POST",
                data:formData,
                contentType:false,
                cache: false,
                processData: false,
                success:function(data){
                   $('#uploaded_file').html(data);
                }
            })
        });
    });
</script>