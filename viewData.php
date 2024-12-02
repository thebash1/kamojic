<?php
    include './database/config.php';
    include './database/connectDB.php';

    //prueba para comprobar el hasheo de contraseñas de php
    $password = 'gutierrez123';
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    echo 'contraseña sin hash: ' . $password .'<br>';
    echo 'contraseña hasheada: ' . $hash_password .'<br>';
?>