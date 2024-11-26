<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localhost</title>
    <link rel="shortcut icon" href="../../icons/server.png" type="image/x-icon">
</head>
<body>
    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_kamojic";
$port = 3306;
$path = "extension=/path/to/extension/mysqli.so";

try{
    $connect_db = new mysqli($servername, $username, $password, $db_name);
    echo "conexión establecida" . "<br>";
}
catch(mysqli_sql_exception){
    echo "conexión no establecida" . "<br>";
}

// date_default_timezone_set('America/Bogota');
// $date = new DateTime();

// echo "date " . date("d/m/y") . "<br>";
// echo "time " . $date->format("H:i:s") . "<br>";
// $date = date("d/m/y") ." ". date("i:h:sa") .",";
