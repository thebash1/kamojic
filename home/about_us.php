<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link rel="stylesheet" href="./footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../icons/about.png" type="image/x-icon">
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
                                <li class="nav-item"><a class="nav-link text-body" href="./home.html">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./offerts.html">Ofertas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./reservations.html">Citas</a></li>
                                <li class="nav-item"><a class="nav-link text-body" href="./about_us.html">Sobre nosotros</a></li>
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
            <div class="container">
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-6">
                        <p class="text-start fs-1">Sobre nosotros</p>
                        <p class="lh-lg">En el salón de belleza Kamojic nos apasiona ofrecer una experiencia de belleza única y personalizada. Ubicados en Aguachica, Cesar, combinamos innovación tecnológica con un enfoque centrado en el cliente. Gracias a nuestro sistema avanzado de gestión de citas en línea, nuestros clientes pueden reservar fácilmente sus servicios, eliminando las largas esperas y asegurando la disponibilidad de horarios. Ofrecemos una amplia gama de servicios, desde cepillados hasta tratamientos capilares especializados y manicura. Nuestro objetivo es destacar como un referente en el sector, brindando calidad, comodidad y modernidad en cada visita.</p> <br>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid border rounded shadow" src="../img/beauty-salon-3277314_1920.jpg" alt="about-us-img">
                    </div>  
                </div>
            </div>
        
            <div class="container">
                <div class="row">
                    <!-- Información de contacto -->
                    <div class="col-md-3 mb-2">
                        <h5>Contáctanos</h5>
                        <ul class="list-unstyled">
                            <li><strong>Dirección:</strong> Calle 9 #30A - 16, Aguachica, Cesar</li>
                            <li><strong>Teléfono:</strong> <a href="tel:+1234567890" class="text-body text-decoration-none">+123 456 7890</a></li>
                            <li><strong>Email:</strong> <a href="mailto:contacto@kamojic.com" class="text-body text-decoration-none">contacto@kamojic.com</a></li>
                        </ul>
                    </div>
        
                    <!-- Contacto con empleados o administrador -->
                    <div class="col-md-3 mb-2">
                        <h5>Contacto Administrativo</h5>
                        <ul class="list-unstyled">
                            <li><strong>Administrador:</strong> Karoll Cantillo</li>
                            <li><strong>Email:</strong> <a href="mailto:admin@kamojic.com" class="text-body text-decoration-none">admin@kamojic.com</a></li>
                            <li><strong>Horario de Atención:</strong> Lunes a Viernes, 8:00 AM - 6:00 PM</li>
                        </ul>
                    </div>
        
                    <!-- Mapa de ubicación -->
                    <div class="col-md-6 mb-2">
                        <h5>Nuestra Ubicación</h5>
                        <div class="ratio ratio-4x3">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8252928195886!2d-73.63287678457835!3d7.898743994319868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409d21a72e1e9d%3A0x4f18c7d96e0a7e1c!2sCalle%209%2C%20Aguachica%2C%20Cesar!5e0!3m2!1ses!2sco!4v1697990451021!5m2!1ses!2sco" 
                                width="600" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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