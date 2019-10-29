<?php
 include 'connect.php';
 session_start();
 $nick = $_SESSION['nickname'];
 $sql = "DELETE FROM usuario WHERE nickname = '$nick'";
 $result = $mysqli->prepare($sql);
 $result->execute();
 $_SESSION['delete'] = 1;
 session_destroy();
?>