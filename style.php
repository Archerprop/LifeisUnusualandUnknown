<?php
session_start();
include 'connect.php';
echo $nick = $_SESSION['nickname'];
 print $query = "INSERT INTO usuario (color,theme) VALUES ('$style','$theme') WHERE nickname = '$nick'";
 $sql = $mysqli->prepare($query);
 $sql->execute() or print "No funciona!!";
?>
