<?php
    $nick = $_SESSION['nickname'];
     $open= opendir("sources/profiles/$nick/upload/");
     $a= 0;
     while (false !=($name = readdir($open))) {
         $a++;
     }   
?>