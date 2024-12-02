<?php
    include './database/config.php';
    include './database/connectDB.php';
    include './codeSecurity.php';
    
    class UserManager {
        private $conn;

        public function __construct() {
            include './database/config.php';
            include './database/connectDB.php';
            $this->conn = connectDB($host, $username, $password, $dbname, $port);;
        }

        public function registerUser($userData): void {
            try {
                // Iniciar transacción
                $this->conn->begin_transaction();

                // 1. Insertar en la tabla `users`
                $stmtUser = $this->conn->prepare("INSERT INTO users (id_rol, user_name, password_user, code_security, name, last_name, phone, rol_name, sex, register_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmtUser->bind_param(
                    "isssssssss",
                    $userData['id_rol'],
                    $userData['user_name'],
                    $userData['password_user'],
                    $userData['code_security'],
                    $userData['name'],
                    $userData['last_name'],
                    $userData['phone'],
                    $userData['rol_name'],
                    $userData['sex'],
                    $userData['register_date']
                );

                if (!$stmtUser->execute()) {
                    throw new Exception("Error al insertar en la tabla `users`: " . $stmtUser->error);
                }

                // Obtener el id_user recién insertado
                $userId = $this->conn->insert_id;

                // 2. Insertar en la tabla correspondiente según el rol
                switch ($userData['rol_name']) {
                    case 'cliente':
                        $this->insertClient($userId, $userData);
                        break;
                    case 'empleado':
                        $this->insertEmployee($userId, $userData);
                        break;
                    default:
                        throw new Exception("Rol no reconocido.");
                }

                // Confirmar transacción
                $this->conn->commit();
                echo "Usuario registrado exitosamente.";

            } catch (Exception $e) {
                $this->conn->rollback(); // Revertir transacción en caso de error
                echo "Error: " . $e->getMessage();
            }
        }

        private function insertClient($userId, $userData) {
            $stmtClient = $this->conn->prepare("INSERT INTO clientes (id_user, id_rol, user_name, password_user, code_security, name, last_name, phone, rol_name, sex, register_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmtClient->bind_param(
                "iisssssssss",
                $userId,
                $userData['id_rol'],
                $userData['user_name'],
                $userData['password_user'],
                $userData['code_security'],
                $userData['name'],
                $userData['last_name'],
                $userData['phone'],
                $userData['rol_name'],
                $userData['sex'],
                $userData['register_date']
            );

            if (!$stmtClient->execute()) {
                throw new Exception("Error al insertar en la tabla `clientes`: " . $stmtClient->error);
            }
        }

        private function insertEmployee($userId, $userData) {
            $stmtEmployee = $this->conn->prepare("INSERT INTO empleados (id_user, id_rol, user_name, password_user, code_security, name, last_name, phone, rol_name, sex, register_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmtEmployee->bind_param(
                "iisssssssss",
                $userId,
                $userData['id_rol'],
                $userData['user_name'],
                $userData['password_user'],
                $userData['code_security'],
                $userData['name'],
                $userData['last_name'],
                $userData['phone'],
                $userData['rol_name'],
                $userData['sex'],
                $userData['register_date']
            );

            if (!$stmtEmployee->execute()) {
                throw new Exception("Error al insertar en la tabla `empleados`: " . $stmtEmployee->error);
            }
        }
    }


    function newUser(){
        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear un array que contenga todos los datos de $_POST
            $formDataRegister = [];

            // Recorrer los datos enviados y almacenarlos en el array
            foreach ($_POST as $key => $value) {
                $formDataRegister[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); // Sanitizar los valores
            }

            $userManager = new UserManager();
            $userManager->registerUser($formDataRegister);
            // Ahora $formData contiene todos los datos del formulario
            echo "<pre>";
            print_r($formDataRegister); // Mostrar los datos del formulario organizados
            echo "</pre>";
        } else {
            echo "No se ha enviado el formulario.";
        }
    }

    // Ejemplo de uso
    // include 'UserManager.php';
    // $connect_db = 'connect.php';
    // $config_db = 'config.php';

    // $userManager = new UserManager();

    // $userData = [
    //     'id_rol' => 2, // Cliente o empleado (2 o 3)
    //     'user_name' => 'johndoe',
    //     'password_user' => password_hash('password123', PASSWORD_DEFAULT),
    //     'code_security' => '123456',
    //     'name' => 'John',
    //     'last_name' => 'Doe',
    //     'phone' => '1234567890',
    //     'rol_name' => 'cliente', // o 'empleado'
    //     'sex' => 'male',
    //     'register_date' => date('Y-m-d H:i:s')
    // ];

    // $userManager->registerUser($userData);
?>