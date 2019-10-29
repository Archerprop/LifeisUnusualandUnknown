<?php
session_start();
include 'connect.php';
 $nick = $_SESSION['nickname'];
 $style = $_POST['style'];
 $theme = $_POST['theme'];
 print $query = "UPDATE usuario SET color='$style', theme='$theme' WHERE nickname = '$nick'";
 $sql = $mysqli->prepare($query);
 $sql->execute() or print "No funciona!!";
die();
?>
