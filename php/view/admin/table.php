<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla ejemplo</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row text-center my-3"><h1>Tabla</h1></div>
    <!-- #region tabla usuarios -->
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Fecha registro</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>marto21</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Empleado</td>
                                <td>+57 300 123 4567</td>
                                <td>10/10/2024</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="radioUser1">
                                        <label class="form-check-label" for="radioUser1"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jabton39</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Empleado</td>
                                <td>+57 301 234 5678</td>
                                <td>11/11/2024</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="radioUser2">
                                        <label class="form-check-label" for="radioUser2"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>laller09</td>
                                <td>Larry</td>
                                <td>Miller</td>
                                <td>Empleado</td>
                                <td>+57 302 245 6789</td>
                                <td>12/11/2024</td>
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
    <!-- #endregion tabla usuarios -->
    </div>

    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>