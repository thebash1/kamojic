<?php

// Verificar si los datos fueron enviados por el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //obtener información de formulario de registro
        $name = $_POST['name'];
        $lastname = $_POST['last_name'];
        $username = $_POST['user_name'];
        $password =$_POST['password_user'];
        $phone = $_POST['phone'];
        $option_sex = $_POST['sex'];
        $sex = "masculino";
        if($option_sex != 1) {
            $sex = "femenino";
        }

        // Mostrar los datos recibidos
        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: $name<br>";
        echo "Apellido: $last_name<br>";
        echo "Usuario: $user_name<br>";
        echo "Teléfono: $phone<br>";
        echo "Sexo: $sex<br>";

        // código para insertar en la base de datos...
        // Redirigir a la misma página para que se recargues
    }
    else {
        die("No se enviaron datos.");
    }
?>
