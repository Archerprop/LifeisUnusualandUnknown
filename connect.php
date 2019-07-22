<?php
//conexion
$mysqli = mysqli_connect("localhost","root","","simpleintelligent");
if ($mysqli->connect_error) {
    die("Error : " . $mysqli->connect_error);
}
?>
