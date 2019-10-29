<?php
    session_start();
          $nick = $_SESSION['nickname'];
          if (file_exists('sources/'.'profiles/'.$nick.'/'.'upload/')) {
            $open= opendir("sources/profiles/$nick/upload/");
            $a= 0;
            while (false !=($name = readdir($open))) {
                $a++;
                $file_info = pathinfo('sources/'.'profiles/'.$nick.'/'.'upload/'.$name);
                $file_type = $file_info['extension'];
                $file_name = $file_info['filename'];
                if($name != "." && $name != ".."){
        ?>
          <div class='icon'><a href = '<?php echo 'sources/'.'profiles/'.$nick.'/'.'upload/'.$name;?>' download="<?php echo $file_name;?>"><img src='<?php if($file_type == 'docx'){echo "images/logo_word.png";}elseif ($file_type == 'pptx') {echo "images/logo_powerpoint.png";}elseif ($file_type == 'png' || $file_type == 'jpg' || $file_type == 'jepg'){echo "sources/profiles/".$nick."/upload/".$name; }elseif ($file_type == 'xlsx') {echo "images/logo_excel.png";} ?>' style='width:100%'></a><p style='font-size: 10px;'><?php echo $file_name;?></p><br><p></p><br></div>
          <?php
            }
          }
        }
        ?>