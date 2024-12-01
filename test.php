<?php
    include "./database/connectDB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

    <form method="POST" action="<?php htmlspecialchars($SERVER['PHP_SELF'])?>">
        <label for="name">nombre:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="last_name">apellido:</label><br>
        <input type="text" id="last_name" name="last_name"><br> 
        <button type="submit" style="margin-top: 10px; margin-bottom: 20px;">enviar</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $lastname =$_POST['last_name'];
        echo "Datos: \n $name $lastname";
    } else {
        echo "No se recibieron datos.";
    }
    mysqli_close(mysql: $conn);
?>