<?php
    function codePassword(): int {
        $code = mt_rand(min: 100000, max: 999999); // Genera un número aleatorio de 6 dígitos
        $file = './codigos.txt'; // Archivo para almacenar códigos únicos

        // Verifica que el archivo exista
        if (!file_exists($file)) {
            file_put_contents($file, '');
        }

        // Cargar todos los códigos previos
        $codes_load = file($file, FILE_IGNORE_NEW_LINES);

        // Si el código ya existe, genera otro
        while (in_array($code, $codes_load)) {
            $code = mt_rand(100000, 999999);
        }

        // Guardar el nuevo código en el archivo
        file_put_contents($file, $code . PHP_EOL, FILE_APPEND);
        return $code;
    }
?>