<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar cita</title>
    <link rel="stylesheet" href="../../../home/footer.css">
    <link rel="shortcut icon" href="../../../icons/add.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container-father">
        <header>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <h1 class="text-center mt-3">Agendar citas</h1>
                    <nav class="navbar">
                        <ul class="nav nav-underline justify-content-center flex-grow-1">
                            <li class="nav-item"><a class="nav-link text-body" href="./deleteReservation.php">Eliminar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./updateReservation.php">Actualizar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./searchReservation.php">Buscar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" id="logout" name="logout" href="../../../index.php">Cerrar sesión</a></li>
                        </ul>
                    </nav>

                    <!-- container search id user -->

                    <!-- <div class="row my-1 justify-content-center">
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input class="form-control" type="text" placeholder="Usuario registrado" aria-label="Usuario" disabled>
                        </div>
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4"> 
                            <form class="d-flex" role="search" action="">
                                <input class="form-control me-2" type="search" placeholder="ID usuario" aria-label="ID usuario">
                                <button class="btn btn-outline-info" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div> -->

                    <!-- end container search id user -->
                </div>
            </div>
        </header>

        <main>
            <div class="container ">
                <div class="row">
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
        
                    <!-- #region seccion agregar clientes -->
                    <div class="row my-1 justify-content-center">
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres" id="nameClient" name="name_client" required>
                        </div>
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" id="lastNameClient" name="last_name_client" required>
                        </div>
                    </div>
                    <div class="row my-1 justify-content-center">
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" name="phone-client" id="phone_client" required>
                        </div>
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <label class="col-form-label" for="autoSizingSelect">Sexo</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="autoSizingSelect" required>
                                        <option id="male" name="male" value="1" selected>Masculino</option>
                                        <option id="female" name="female" value="2">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="row my-1 justify-content-center">
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Servicio elegido" aria-label="Servicio" id="service" name="service" required>
                        </div>
                        <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input class="form-control" type="text" placeholder="Precio" aria-label="Precio" id="price" name="price" value="" disabled>
                        </div>
                    </div>
        
                    <div class="row my-1 justify-content-center">
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <a class="btn" href="#" onclick="alert('la casilla blanca es para la fecha')"><img src="../../../icons/schedule.png" alt="calendar"></a>
                                </div>
                                <div class="col-9">
                                    <input class="form-control" type="datetime-local" placeholder="Calendario" id="calendarAddReservation" name="calendarAddReservation" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-xs-block col-md-6 col-lg-4 col-xl-4">
                            <input type="text" class="form-control" placeholder="Cita pendiente" aria-label="Estado" id="status" name="status" disabled>
                        </div>
                    </div>
                    
                    <div class="row my-3 justify-content-center">
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

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        // document.getElementById('alertCalendar').addEventListener('click', function(){
        //     alert('Elija correctamente la fecha y hora de acuerdo al horario de trabajo del local');
        // });

        function insertCurrentDateAndTime(){
            const currentDate = new Date();
            const arrayDateTime = `${currentDate.getDate()}/${(currentDate.getMonth()+1)}/${currentDate.getFullYear()} - ${currentDate.toLocaleTimeString()}`;
            
            document.getElementById("none").value = arrayDateTime;
        };

        window.onload = function () {
            setTimeout(insertCurrentDateAndTime, 1000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

