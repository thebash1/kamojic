<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_kamojic";
$port = 3306;
$path = "extension=/path/to/extension/mysqli.so";

$connect_db = new mysqli($servername, $username, $password, $db_name);
date_default_timezone_set('America/Bogota');
$date = new DateTime();


if(!$connect_db){
    echo "Conexión fallida" . $connect_db->connect_error . "<br>";
}

echo "Conexión establecida" . "<br>";

echo "date " . date("d/m/y") . "<br>";
echo "time " . $date->format("H:i:s") . "<br>";
$date = date("d/m/y") ." ". date("i:h:sa") .",";
