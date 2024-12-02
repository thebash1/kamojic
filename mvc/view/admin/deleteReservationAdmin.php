<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <link rel="stylesheet" href="../../../home/footer.css">
    <link rel="shortcut icon" href="../../../icons/delete.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container-father">
        <header>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <h1 class="text-center mt-3">Eliminar citas</h1>
                    <nav class="navbar">
                        <ul class="nav nav-underline justify-content-center flex-grow-1">
                            <li class="nav-item"><a class="nav-link text-body" href="./homeAdmin.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./addReservationAdmin.php">Agregar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./updateReservationAdmin.php">Actualizar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" href="./searchReservationAdmin.php">Buscar cita</a></li>
                            <li class="nav-item"><a class="nav-link text-body" id="logout" name="logout" href="../../controller/closeSesion.php">Cerrar sesión</a></li>
                        </ul>
                    </nav>    
                </div>
        
                <!-- #region container buscar cliente -->
                <div class="row my-1 justify-content-center">
                    <div class="col-5 d-xs-block col-sm-6 col-md-5 col-lg-4 col-xl-3">
                        <input class="form-control" type="datetime-local" aria-label="Fecha y hora" id="calendarDeleteReservation" name="calendarDeleteReservation" required>
                    </div>
                    <div class="col-7 d-xs-block col-sm-6 col-md-5 col-lg-4 col-xl-3"> 
                        <form class="d-flex" role="search" action="">
                            <input class="form-control me-3" type="search" placeholder="ID Cliente" aria-label="ID Cliente">
                            <button class="btn btn-info" type="button" title="Con fecha actual" data-bs-toggle="modal" data-bs-target="#modalFunctionUnused">Buscar</button>
                        </form>
                    </div>
                </div>
                <!-- #endregion container buscar cliente-->
            </div>
        </header>

        <main>
            <div class="container">
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
                
                <!-- #region tabla clientes -->
                <div class="row">
                    <div class="col">
                        <div class="table-resposive mt-5"></div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>marto21</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>3001234567</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="option" id="radioUser3">
                                                <label class="form-check-label" for="radioUser3"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>jabton39</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>3012345678</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="option" id="radioUser3">
                                                <label class="form-check-label" for="radioUser3"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>laller09</td>
                                        <td>Larry</td>
                                        <td>Miller</td>
                                        <td>3022456789</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="option" id="radioUser3">
                                                <label class="form-check-label" for="radioUser3"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- #endregion tabla clientes -->    
            </div>
        </main>

        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script>
        function insertCurrentDate(){
            const currentDate = new Date();
            const arrayDate = `${currentDate.getDate()}/${(currentDate.getMonth()+1)}/${currentDate.getFullYear()}`;
            document.getElementById("date_delete_reservation").value = arrayDate;
        };

        window.onload = function () {
            setTimeout(insertCurrentDate, 1000);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


