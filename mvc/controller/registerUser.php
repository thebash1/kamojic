<?php
    include './database/config.php';
    include './database/connectDB.php';
    include './codeSecurity.php';

    class User {
        private $id_rol;
        private $user_name;
        private $password_user;
        private $code_security;
        private $first_name;
        private $last_name;
        private $phone;
        private $rol_name;
        private $sex;
        private $register_date;
        private $conn;

        public function __construct() {
            include './database/config.php';
            include './database/connectDB.php';
        
            $this->conn = connectDB($host, $username, $password, $dbname, $port);
            date_default_timezone_set('America/Bogota');
        }

        public function setUserData($user_name, $password_user, $code_security, $first_name, $last_name, $phone, $rol_name, $sex, $id_rol) {
            $this->user_name = mysqli_real_escape_string($this->conn, $user_name);
            $this->password_user = mysqli_real_escape_string($this->conn, password_hash($password_user, PASSWORD_DEFAULT));
            $this->code_security = mysqli_real_escape_string($this->conn, $code_security);
            $this->first_name = mysqli_real_escape_string($this->conn, $first_name);
            $this->last_name = mysqli_real_escape_string($this->conn, $last_name);
            $this->phone = mysqli_real_escape_string($this->conn, $phone);
            $this->rol_name = mysqli_real_escape_string($this->conn, $rol_name);
            $this->sex = mysqli_real_escape_string($this->conn, $sex);
            $this->id_rol = mysqli_real_escape_string($this->conn, $id_rol);
            $this->register_date = date('Y-m-d H:i:s');
        }

        public function registerUser() {
            include './codeSecurity.php';

            // Verifying that id_rol is valid (1, 2, or 3)
            if ($this->id_rol < 1 || $this->id_rol > 3) {
                return "ID de rol invalido.";
            }

            // Prepare and execute the query
            $query = 
                "INSERT INTO users (id_rol, user_name, password_user, code_password, first_name, last_name, phone, rol_name, sex, register_date)
                VALUES ('$this->id_rol', '$this->user_name', $this->password_user', '$this->code_security', '$this->first_name', '$this->last_name', '$this->phone', '$this->rol_name', '$this->sex', '$this->register_date')";

            if (mysqli_query($this->conn, $query)) {
                return "Usuario registrado!";
            } else {
                return "Error: " . mysqli_error($this->conn);
            }
        }
    }

    // Creating a new instance of the User class
    $user = new User();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $rol = 'cliente';
        $sex = $_POST['sex'];
        $idrol = 3;
        
        // Setting user data
        $user->setUserData($username, $password, codePassword(),$firstname, $lastname, $phone, $rol, $sex, $idrol);

        echo $user->registerUser();
    }

?>