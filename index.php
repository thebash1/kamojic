<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="./icons/login.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="./login.css"> -->
</head>
<body>

    <div class="container-father">
        <header></header>

        <main>
            <div class="container">
                <div class="row vh-100 justify-content-center align-items-center text-center w-100">
                    <div class="col bg d-none d-lg-block col-md-6 col-lg-6 col-xl-6 rounded">
                        <img class="img-fluid border rounded shadow" src="./img/open-1853924_1280.jpg" alt="">
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-5 col-xl-5">
                        <h1 class="mb-3">Login</h1>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputUser" placeholder="Usuario">
                            <label for="floatingInputUser">Usuario</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPasswordUser" placeholder="Contraseña">
                            <label for="floatingPasswordUser">Contraseña</label>
                        </div>
                        <div class="row justify-content-center my-3 w-100 mx-auto">
                            <div class="d-grid gap-2 col-6 col-md-6 col-lg-7 col-xl-7">
                                <a type="button" href="./home/home.php" class="btn btn-outline-primary">Iniciar sesión</a>
                                <a type="button" href="./register.php" class="btn btn-outline-success">Registrarme</a>
                            </div>
                        </div>
                        <div class="col w-100">
                            <div class="col col-6 col-md-6 col-lg-6 col-xl-6"></div>
                                <a href="#" class="a-hover" style="background-color: none; border: none; color: #134eec; text-decoration: none;" data-bs-toggle="modal" data-bs-target="#modalFunctionUnused">¿Contraseña olvidada?</a>
                                <!-- #region modal opcion sin uso -->
                                <!-- Modal -->
                                <div class="modal fade" id="modalFunctionUnused" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalFunction" aria-hidden="true">
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
                                </div>
                                <!-- #endregion modal opcion sin uso-->  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>