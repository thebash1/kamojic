<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de cambios</title>
    <link rel="stylesheet" href="../home/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../icons/cycle.png" type="image/x-icon">
</head>
<body>

    <div class="container-father">
        <header>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center text-center">
                    <h1 class="mt-3">Solicitud de cambios</h1>
                    <nav class="navbar">
                        <ul class="nav nav-underline justify-content-center flex-grow-1">
                            <li class="nav-item"><a class="nav-link text-body" href="../home/home.php">Regresar</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./addReservationClient.php">Agendar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" id="logout" name="logout" href="../index.php">Cerrar sesión</a></li>
                        </ul>
                    </nav>

                    <!-- #region modal opcion sin uso -->
                    <!-- Modal -->
                    <div class="modal fade" id="modalFunctionUnused" tabindex="-1" aria-labelledby="exampleModalFunction" aria-hidden="true">
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
        </header>

        <main>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <!-- #region seccion agregar clientes -->
                    <div class="row my-1 justify-content-center">
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" id="userClient" name="name_client" required>
                        </div>
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres" id="nameClient" name="last_name_client" required>
                        </div>
                    </div>
                    <div class="row my-1 justify-content-center">
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" name="lastNameClient" id="phone_client" required>
                        </div>
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                            <select class="form-select" id="autoSizingSelect" required>
                                <option id="default_gender" name="default_gender" selected>Cambio a realizar</option>
                                <option id="gender_1" name="gender1" value="1">Modificar fecha</option>
                                <option id="gender_2" name="gender2" value="2">Cancelar cita</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="row my-1 justify-content-center">
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Servicio elegido" aria-label="Servicio" id="service" name="service" required>
                        </div>
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <a class="btn" href="#" onclick="alert('la casilla blanca es para la fecha')"><img src="../icons/schedule.png" alt="calendar"></a>
                                </div>
                                <div class="col-9">
                                    <input class="form-control" type="datetime-local" placeholder="Calendario" id="calendarAddReservation" name="calendarAddReservation" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-1 justify-content-center">
                        <div class="col d-xs-block col-md-12 col-lg-8 col-xl-8">
                            <textarea class="form-control" placeholder="Escribe aquí tu razón de esta acción..." id="textareaDescription" style="height: 100px" required></textarea>
                            <label for="textareaDescription"></label>
                        </div>
                    </div>
         
                    <div class="row justify-content-center">
                        <div class="d-grid gap-2 col-6 col-md-4 col-lg-3 col-xl-3">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFunctionUnused">Guardar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalFunctionUnused">Cancelar</button>
                        </div>
                    </div>
        
                    <!-- #region btn modo noche -->
                    <!-- <div class="mode">
                        <button class="btn-mode" type="button" id="toggleButton"><img src="../../icons/moon-regular-24.png" alt=""></button>
                    </div> -->
                    <!-- #endregion btn modo noche -->
        
                    <!-- #endregion seccion agregar clientes -->
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