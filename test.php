<?php
    include "./database/config.php";
    include "./database/connectDB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <style>
        .container{
            display: flex;
            flex-direction: row;
            flex-grow: 1;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">    
        <div class="php">
            <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            ?>
        </div>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <label for="name">nombre:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="last_name">apellido:</label><br>
            <input type="text" id="last_name" name="last_name"><br> 
            <button type="submit" style="margin-top: 10px; margin-bottom: 20px;">enviar</button>
        </form>
    </div>
</body>
</html>

<?php
    
    connectDB($host,$username,$password,$dbname, $port);
    echo "<br><br>";
    showInfo();
    function showInfo():void{
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $lastname = $_POST['last_name'];
            echo "Datos: $name $lastname";
        } else {
            echo "No se recibieron datos.";
        }
    }

?>