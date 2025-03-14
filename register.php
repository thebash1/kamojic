<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./home/footer.css">
    <link rel="shortcut icon" href="./icons/register.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./login.css"> -->
</head>
<body>

    <div class="container-father">
        <header></header>

        <main>
            <div class="container vh-100 d-flex justify-content-center align-items-center text-center" id="background">
                <div class="row justify-content-center w-100">
                    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                        <img class="img-fluid border rounded shadow" src="./img/beauty-salon-4043096_1920.jpg" alt="" style="height: 500px; width: 500px; object-fit: cover;">
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-5 col-xl-5">
                        <div class="text-center">
                            <img class="mb-5" src="./img/logo-icon-title.png" alt="" style="width: 60px; height: auto;">
                            <h2 class="fs-1 text-center">Crea tu cuenta</h2>
                            <p class="text-center">Es totalmente gratis</p>
        
                            <!-- #region formulario de registro -->
                            <form id="formRegisterUser" method="POST" action="./mvc/controller/registerUser.php">
                                <div class="d-flex input-group mb-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombres" value="" required>
                                        <label for="name">Nombres</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellidos" value="" required>
                                        <label for="lastname">Apellidos</label>
                                    </div>
                                </div>
        
                                <div class="d-flex input-group mb-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                                        <label for="username">Usuario</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
        
                                <div class="d-flex input-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" value="" required>
                                        <label for="phone">Teléfono</label>    
                                    </div>
                                    <select class="form-select" name="sex" id="sex" required>
                                        <option id="male" value="male" selected>Masculino</option>
                                        <option id="female" value="female">Femenino</option>
                                    </select>
                                </div>
        
                                <!-- <div class="d-flex input-group mb-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingAddress" placeholder="Dirección" value="" required>
                                        <label for="floatingAddress">Dirección</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingQuarter" placeholder="Barrio" value="" required>
                                        <label for="floatingBarrio">Barrio</label>
                                    </div>
                                </div> -->
        
                                <!-- <div class="d-flex mb-3">
                                    <label class="text-center me-3" for="formDate">Fecha de registro</label>
                                    <input type="text" class="form-control" id="formDateRegister" placeholder="Fecha" value="" disabled>
                                </div> -->
                            </form>
        
                            <div class="row mt-3 mb-2 align-items-center justify-content-center w-100 mx-auto">
                                <div class="d-grid gap-2 col-6 col-md-6 col-lg-7 col-xl-7">
                                    <button type="submit" class="btn btn-outline-success" onclick="alert('revisa si se enviaron los datos');">Guardar</button>   
                                    <!-- #region modal opcion sin uso -->
                                    <!-- Modal -->
                                    <!-- <div class="modal fade" id="modalFunctionUnused" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalFunction" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Función no disponible</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lamentamos que se encuentre con este mensaje pero, está función no está disponible en el momento, esperamos pronto resolver este problema.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- #endregion modal opcion sin uso-->  
                                </div>
                            </div>
                            <div class="col">
                                <a href="./index.php" class="a-hover mt-3" style="text-decoration: none;">¿Tienes una cuenta?</a>
                            </div>
                        </div>
                        <!-- #endregion formulario de registro-->
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-body text-center mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<?php

    // if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     var_dump($_POST);
    //     connectDB($host, $username, $password, $dbname, $port);
    //     echo '<br>';
    //     showReg();
    // }

    // function showReg():void{
    //     $name = $_POST['name'] ?? 'no recibido';
    //     $lastname = $_POST['last_name'] ?? 'no recibido';
    //     $username = $_POST['user_name'] ?? 'no recibido';
    //     $password = $_POST['password_user'] ?? 'no recibido';
    //     $phone = $_POST['phone'] ?? 'no recibido';
    //     $sex = $_POST['sex'] ?? 'no recibido';

    //     echo "Datos: ($name, $lastname, $username, $password, $phone, $sex)";
    // }
    // echo '<br><br>';
 
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    // // Verificar si los datos fueron enviados por el formulario
    // if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     //obtener información de formulario de registro
    //     $name = trim($_POST['name']);
    //     $lastname = trim($_POST['last_name']);
    //     $username = trim($_POST['user_name']);
    //     $password = trim($_POST['password_user']);
    //     $phone = trim($_POST['phone']);
    //     $option_sex = trim($_POST['sex']);
    //     $sex = "masculino";
    //     if($option_sex != 1) {
    //         $sex = "femenino";
    //     }
    
    //     // Mostrar los datos recibidos
    //     echo "datos ---> usuario: $username, contraseña: $password, nombre: $name, apellido: $lastname, teléfono: $phone, sexo: $sex";
    
    //     // código para insertar en la base de datos...
    //     // Redirigir a la misma página para que se recargues
    // }
    // else {
    //     echo "No se enviaron datos";
    // }

?>