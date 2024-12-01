<!-- #region estructura html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localhost</title>
    <link rel="stylesheet" href="../home/footer.css">
    <link rel="shortcut icon" href="../../icons/server.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-father">
        <header></header>

        <main>
            <div class="container">
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col">
                        <p class="text-start">Esta página es para conectarse con el server de infinitefree</p>
                        <p class="text-start">Estado: <?php include './connect_db.php'?></p>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<!-- #endregion estructura html -->
