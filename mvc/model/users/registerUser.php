<?php
// Verificar si los datos fueron enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
    $user_name = isset($_POST['user_name']) ? trim($_POST['user_name']) : '';
    $password_user = isset($_POST['password_user']) ? trim($_POST['password_user']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $value_sex = isset($_POST['sex']);
    $sex = "masculino";
    if($value_sex =! "1") $sex = "femenino" ;

    // Validación básica (puedes agregar más validaciones)
    if (empty($name) || empty($last_name) || empty($user_name) || empty($password_user) || empty($phone)) {
        die("Por favor, complete todos los campos.");
    }

    // Mostrar los datos recibidos
    echo "<h3>Datos recibidos:</h3>";
    echo "Nombre: $name<br>";
    echo "Apellido: $last_name<br>";
    echo "Usuario: $user_name<br>";
    echo "Teléfono: $phone<br>";

    // código para insertar en la base de datos...
}
else {
    die("No se enviaron datos.");
}

?>
