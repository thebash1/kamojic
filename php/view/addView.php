<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../../icons/user-plus-regular-24.png" type="image/x-icon">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center my-3">Agendar citas</h1>
            <nav class="navbar mb-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link text-body" href="./deleteView.php">Borrar cita</a></li>
                    <li class="nav-item"><a class="nav-link text-body" href="./updateView.php">Modificar cita</a></li>
                    <li class="nav-item"><a class="nav-link text-body" href="./searchView.php">Buscar cita</a></li>
                    <li class="nav-item"><a class="nav-link text-body" id="logout" name="logout" href="../../index.html">Cerrar sesión</a></li>
                </ul>
            </nav>
            <div class="row justify-content-center">
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres" required>
                </div>
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" required>
                </div>
            </div>
            <div class="row my-2 justify-content-center">
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" name="" id="" required>
                </div>
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" id="autoSizingSelect" required>
                        <option selected>Sexo</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Servicio elegido" aria-label="Servicio" name="" id="" required>
                </div>
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input class="form-control" type="text" placeholder="Agendamiento presencial" aria-label="Agendamiento" disabled>
                </div>
            </div>

            <div class="row my-2 justify-content-center">
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Fecha registrada" aria-label="Fecha" disabled>
                </div>
                <div class="col d-xs-block col-md-6 col-lg-4 col-xl-4">
                    <input type="text" class="form-control" placeholder="Cita pendiente" aria-label="Estado" disabled>
                </div>
            </div>
            
            <div class="row my-2 justify-content-center ">
                <div class="d-grid gap-2 col-7 col-md-6 col-lg-4">
                    <button type="button" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
            <!-- <div class="mode">
                <button class="btn-mode" type="button" id="toggleButton"><img src="../../icons/moon-regular-24.png" alt=""></button>
            </div> -->

        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
    

?>

