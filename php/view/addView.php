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
            <nav class="navbar">
                <ul class="nav-item">
                    <li><a class="nav-link" href="./deleteView.php">Borrar cita</a></li>
                    <li><a class="nav-link" href="./updateView.php">Modificar cita</a></li>
                    <li><a class="nav-link" href="./searchView.php">Buscar cita</a></li>
                    <li><a class="nav-link" id="logout" name="logout" href="../../index.html">Cerrar sesión</a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" name="" id="">
                </div>
                <div class="col">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" id="autoSizingSelect">
                    <option selected>Sexo</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Servicio elegido" aria-label="Servicio" name="" id="">
                </div>
                <div class="col">
                    <input class="form-control" type="text" placeholder="Agendamiento presencial" aria-label="Cita" disabled>
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

