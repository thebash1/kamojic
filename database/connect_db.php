<!-- #region estructura html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localhost</title>
    <link rel="shortcut icon" href="../../icons/server.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<!-- #endregion estructura html -->

<?php
// creado clase para conectar base de datos con infinitefree
class Database
{
    private $hostname = "sql311.infinityfree.com";
    private $database = "if0_37810355_db_kamojic";
    private $username = "if0_37810355";
    private $password = "1HhFx7F57ie";
    private $charset = "utf8_mb4_general_ci";

    function conectionDB(){
        try{
            $conection = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conection, $this->username, $this->password, $options);
            return $pdo;
        }
        catch (PDOException $e){
            echo 'Error de conexión: ' . $e;
            exit;
        }
    }


} 
// linea final de la clase 

// $host = "bog73rokq73llaexnpqe-mysql.services.clever-cloud.com";
// $user = "uux18nm9deg50sq3";
// $password = "uux18nm9deg50sq3";
// $database = "bog73rokq73llaexnpqe";
// $url_db = "
// mysql://uux18nm9deg50sq3:58bbU3YefYLg6hYzuAvq@bog73rokq73llaexnpqe-mysql.services.clever-cloud.com:3306/bog73rokq73llaexnpqe
// ";
// $port = 3306;
// $path = "extension=/path/to/extension/mysqli.so";

// // conectividad a la base de datos
// try{
//     $connect_db = new mysqli($servername, $username, $password, $db_name);
//     echo "conexión establecida" . "<br>";
// }
// catch(mysqli_sql_exception){
//     echo "conexión no establecida" . "<br>";
// }     
// fin de conectidad


// date_default_timezone_set('America/Bogota');
// $date = new DateTime();

// echo "date " . date("d/m/y") . "<br>";
// echo "time " . $date->format("H:i:s") . "<br>";
// $date = date("d/m/y") ." ". date("i:h:sa") .",";
?>