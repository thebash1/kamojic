<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "db_kamojic";
$port = 3306;
$path = "extension=/path/to/extension/mysqli.so";


$conn = new mysqli($servername, $username, $password, $db_name);

if(!$conn){
    echo "Conexión fallida" . mysqli_connect_error() . "<br>";
}

echo "date " . date("d/m/y") . "<br>";
echo "time" . date("h:i:sa") . "<br>";
$date = date("d/m/y") ." ". date("i:h:sa") .",";

$connect_db->close();
