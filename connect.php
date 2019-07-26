<?php
//conexion
$mysqli = new PDO("localhost","root","","simpleintelligent");
if ($mysqli->connect_error) {
    die("Error : " . $mysqli->connect_error);
}
?>
