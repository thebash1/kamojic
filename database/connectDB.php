<?php

// creando código para conectarme a la base de datos

$servername = "sql311.infinityfree.com";
$username = "if0_37810355"; 
$password = "1HhFx7F57ie";
$dbname = "if0_37810355_db_kamojic";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
try{
    echo "Conexión establecida";
}
catch(mysqli_sql_exception){    
    echo "Conexión fallida";
}


// creado clase para conectar base de datos con infinitefree
// class Database
// {
//     private $hostname = "sql311.infinityfree.com";
//     private $database = "if0_37810355_db_kamojic";
//     private $username = "if0_37810355";
//     private $password = "1HhFx7F57ie";
//     private $charset = "utf8_mb4_general_ci";

//     function conectionDB(){
//         try{
//             $conection = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
//             $options = [
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_EMULATE_PREPARES => false
//             ];
//             $pdo = new PDO($conection, $this->username, $this->password, $options);
//             return $pdo;
//         }
//         catch (PDOException $e){
//             echo 'Error de conexión: ' . $e;
//             exit;
//         }
//     }


// } 
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

function showInfo():void{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $lastname =$_POST['last_name'];
        echo "Datos: \n $name $lastname";
    } else {
        echo "No se recibieron datos.";
    }
}



?>