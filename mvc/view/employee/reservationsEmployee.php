<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <link rel="stylesheet" href="../../../home/footer.css">
    <link rel="shortcut icon" href="../../../icons/price-tag.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-father">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar" style="background: #FDD3D0;">
                        <div class="container my-2">
                            <div class="d-flex align-items-center">
                                <img class="img-fluid me-3" src="../../../icons/start-black.png" alt="Logo" style="cursor: no-drop;">
                                <a class="text-body fw-semibold fs-4" href="#" style="text-decoration: none; cursor: no-drop;">Kamojic</a>
                            </div>
                            <ul class="nav nav-underline justify-content-center flex-grow-1">
                                <li class="nav-item"><a class="nav-link text-body" href="./homeEmployee.php">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./offertsEmployee.php">Ofertas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./reservationsEmployee.php">Citas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./aboutusEmployee.php">Sobre nosotros</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./addReservation.php">Panel de citas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="../../controller/closeSesion.php">Cerrar sesión</a></li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <a href="#" data-bs-toggle="tooltip" data-bs-title="Información de usuario">
                                    <img class="img-fluid mx-3" src="../../../icons/info.png" alt="info-user">
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    
        <main>
            <div class="container text-center my-2">
                <h1 class="display-4 fw-semibold">Bienvenido a citas</h1>
                <p class="font-monospace">Aquí encontrarás cada cita realizada por ti</p>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <h1>no hay citas creadas aún</h1>
                </div>
            </div>
        </main>
        
        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>