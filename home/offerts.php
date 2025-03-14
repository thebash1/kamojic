<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <link rel="stylesheet" href="./footer.css">
    <link rel="shortcut icon" href="../icons/price-tag.png" type="image/x-icon">
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
                                <img class="img-fluid me-3" src="../icons/start-black.png" alt="Logo" style="cursor: no-drop;">
                                <a class="text-body fw-semibold fs-4" href="#" style="text-decoration: none; cursor: no-drop;">Kamojic</a>
                            </div>
                            <ul class="nav nav-underline justify-content-center flex-grow-1">
                                <li class="nav-item"><a class="nav-link text-body" href="./home.php">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./offerts.php">Ofertas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./reservations.php">Citas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./about_us.php">Sobre nosotros</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="../mvc/controller/closeSesion.php">Cerrar sesión</a></li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <a href="#" data-bs-toggle="tooltip" data-bs-title="Información de usuario">
                                    <img class="img-fluid mx-3" src="../icons/info.png" alt="info-user">
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <main>
            <div class="container my-3">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col">
                        <h1 class="display-4 fw-semibold">Bienvenido a ofertas</h1>
                        <p class="font-monospace">Aquí encontrarás cada oferta disponible y vigente de nuestro local</p>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="../img/home_servicios/peinado.jpg" class="card-img-top" alt="image4" style="object-fit: cover; height: 15rem;">
                            <div class="card-body">
                                <div class="col d-flex justify-content-between my-1">
                                    <h5 class="card-text">Tratamiento 2x1</h5>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-title="Invita a una compañera a realizarse el tratamiento y obténdran un descuento del 20%">
                                        <img src="../icons/info.png" alt="icon-info">
                                    </a> 
                                </div>
                                <h6 class="card-title">$48,000</h6>
                                <a href="#" class="btn" style="background-color: #FFB5AF;">Agregar</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="../img/home_servicios/planchado.jpeg" class="card-img-top" alt="image1" style="object-fit: cover; height: 15rem;">
                            <div class="card-body">
                                <div class="col d-flex justify-content-between my-1">
                                    <h5 class="card-text">Planchado 2x1</h5>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-title="Llevarás un descuento del 20% si tu compañera y tú deciden realizarse el planchado de cabello">
                                        <img src="../icons/info.png" alt="icon-info">
                                    </a> 
                                </div>
                                <h6 class="card-title">$80,000</h6>
                                <a href="#" class="btn" style="background-color: #FFB5AF;">Agregar</a>
                            </div>
                        </div>
                    </div>
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