<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $test = $_POST['test'] ?? 'No enviado';
    echo "Datos: \n $test";
} else {
    echo "No se recibieron datos.";
}




?>