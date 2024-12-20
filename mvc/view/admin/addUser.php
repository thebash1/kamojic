<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
    <link rel="stylesheet" href="../../../home/footer.css">
    <link rel="shortcut icon" href="../../../icons/add-user.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-father">
        <header>
            <div class="container mt-3">
                <div class="row">
                    <h1 class="text-center">Agregar usuario</h1>
                    <nav class="navbar">
                        <ul class="nav nav-underline justify-content-center align-items-center flex-grow-1">
                            <li class="nav-item"><a class="nav-link text-body" href="./controlUsers.php">Regresar</a></li>
                            <li class="nav-item"><a class="nav-link text-body" id="logout" name="logout" href="../../controller/closeSesion.php">Cerrar sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <!-- #region seccion agregar usuarios -->
                <div class="row my-2 justify-content-center">
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="usuario" id="username" name="user_name" required>
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input class="form-control" type="text" placeholder="Contraseña" aria-label="contraseña" id="password" name="password_user" required>
                    </div>
                </div>
    
                <div class="row my-2 justify-content-center">
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres" id="name" name="user_firstname" required>
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" id="lastname" name="user_lastname" required>
                    </div>
                </div>
    
                <div class="row my-2 justify-content-center">
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" name="phone" id="phoneUser" required>
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <label class="visually-hidden" for="sex">Preference</label>
                        <select class="form-select" name="sex" id="sex" required>
                            <option id="masculino" name="masculino" value="1">Masculino</option>
                            <option id="femenino" name="femenino" value="2">Femenino</option>
                        </select>
                    </div>
                </div>
    
                <div class="row my-2 justify-content-center">
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <input type="text" class="form-control" name="regdate" id="regdate" placeholder="Fecha de registro" aria-label="Fecha de registro" data-bs-toggle="tooltip" data-bs-title="Default tooltip" disabled>
                    </div>
                    <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect" required>
                            <option id="rol" name="rol" selected>Rol</option>
                            <option id="empleado" name="empleado" value="1">Empleado</option>
                            <option id="cliente" name="cliente" value="2">Cliente</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mt-3 justify-content-center">
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
    
                <!-- #endregion seccion agregar usuarios -->
            </div>
        </main>

        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script>
        function insertCurrentDateAndTime(){
            const currentDate = new Date();
            const arrayDate = `${currentDate.getDate()}/${(currentDate.getMonth()+1)}/${currentDate.getFullYear()} `;
            document.getElementById("regdate").value = arrayDate;
        };

        window.onload = function () {
            setTimeout(insertCurrentDateAndTime, 2000);
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>