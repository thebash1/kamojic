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
            <h1>Agendar cita</h1>
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


    <script src="script.js"></script>
</body>
</html>

<?php

