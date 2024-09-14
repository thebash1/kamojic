<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../icons/user-plus-regular-24.png" type="image/x-icon">
    
</head>
<body>
    <div class="container">
        <div class="container-center">
            <nav class="navbar">
                <h1>Agendar cita</h1>
                <ul class="items">
                    <li><a href="./deleteView.php">Borrar cita</a></li>
                    <li><a href="./updateView.php">Modificar cita</a></li>
                    <li><a href="./searchView.php">Buscar cita</a></li>
                    <li class="logout"><a href="../../index.html">Cerrar sesión</a></li>
                </ul>
            </nav>
            <form action="" class="form">
                <label for="fname">Nombre:</label>
                <input type="text" name="fname" id="fname"><br>
                <label for="lname">Apellido:</label>
                <input type="text" name="lname" id="lname"><br>
                <label for="phone">Teléfono:</label>
                <input type="number" name="phone" id="phone"><br>
            </form>

            <div class="btn-group">
                <button class="btn-cancel" type="button">Cancelar</button>
                <button class="btn-save" type="button">Guardar</button>
            </div>

            <div class="mode">
                <button class="btn-mode" type="button" id="toggleButton"><img src="../../icons/moon-regular-24.png" alt=""></button>
            </div>

        </div>
    </div>

    <?php echo "prueba" ?>
    <script src="script.js"></script>
</body>
</html>

