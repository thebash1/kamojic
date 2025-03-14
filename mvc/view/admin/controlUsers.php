<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de usuarios</title>
    <link rel="stylesheet" href="../../../home/footer.css">
    <link rel="shortcut icon" href="../../../icons/adjust.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container-father">
        <header>
            <div class="container">
                <div class="row my-3">
                    <h1 class="text-center">Panel de usuarios</h1>
                </div>
                <div class="row my-3 justify-content-center">
                    <div class="col d-xs-block col-sm-6 col-md-5 col-lg-4 col-xl-3"> 
                        <form class="d-flex" role="search" action="">
                            <input class="form-control me-2" type="search" placeholder="ID Usuario" aria-label="ID Usuario">
                            <button class="btn btn-info" type="button" title="Con fecha actual">Buscar</button>
                        </form>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col d-flex justify-content-end gap-3">
                        <a type="button" href="./homeAdmin.php" class="btn btn-secondary">Ir a inicio</a>
                        <a type="button" href="./addReservationAdmin.php" class="btn btn-secondary">Citas</a>
                        <a type="button" href="./addUser.php" class="btn btn-primary">Agregar usuario</a>
                        <button type="button" class="btn btn-warning" id="btnUpdateUser">Actualizar usuario</button>
                        <button type="button" class="btn btn-danger" id="btnDeleteUser">Eliminar usuario</button>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <!-- #region tabla usuarios -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive mt-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Usuario</th>
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

                <!-- #region modal actualizar usuario -->
                <section class="modal-update-user">
                    <div class="modal fade" id="modalUpdateUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar usuario</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="idUser" class="col-form-label">ID Usuario</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="idUser" name="idUser" class="form-control" value="1" disabled>
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="userName" class="col-form-label">Usuario</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="userName" name="userName" class="form-control" placeholder="Nuevo usuario" value="marto21">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="userName" class="col-form-label">Nombre</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Nuevo nombre" value="Mark">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="userLastName" class="col-form-label">Apellido</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="userLastName" id="userLastName" class="form-control" placeholder="Nuevo apellido" value="Otto">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="rolUser" class="col-form-label">Rol</label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select" aria-label="Rol">
                                            <option value="1" selected>Empleado</option>
                                            <option value="2">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label for="idRolUser" class="col-form-label">ID Rol</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="idRolUser" name="idRolUser" class="form-control" value="1" disabled>
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="phoneUser" class="col-form-label">Teléfono</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="phoneUser" id="phoneUser" class="form-control" placeholder="Teléfono nuevo" value="+57 3001234567">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-auto">
                                        <label for="dateRegisterUser" class="col-form-label">Fecha registrado</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="dateRegisterUser" id="dateRegisterUser" class="form-control" placeholder="Fecha registrado" value="10/10/2024" disabled>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                <!-- #endregion modal actualizar usuario -->

                <!-- #region modal eliminar usuario -->
                <section class="modal-delete-user">
                    <div class="modal fade" id="modalDeleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar usuario</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Hola, esto es una prueba</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                <!-- #endregion modal eliminar usuario -->
            </div>
        </main>

        <footer class="text-body text-center mt-3 mb-0">
            <p>© 2024 Kamojic. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('btnUpdateUser').addEventListener('click', () => {
            const radios = document.querySelectorAll('input[name="option"]');
            let seleccionado = false;

            radios.forEach((radio) => {
                if (radio.checked) {
                    seleccionado = true;
                }
            });

            if (seleccionado) {
                const modal = new bootstrap.Modal(document.getElementById('modalUpdateUser'));

                // Escuchar el cierre del modal y limpiar clases si es necesario
                const modalElement = document.getElementById('modalUpdateUser');
                modalElement.addEventListener('hidden.bs.modal', () => {
                    document.body.classList.remove('modal-open');
                    document.querySelector('.modal-backdrop')?.remove();
                });

                modal.show();
            } else {
                alert('Por favor, selecciona una opción.');
            }
        });

        document.getElementById('btnDeleteUser').addEventListener('click', () => {
            const radios = document.querySelectorAll('input[name="option"]');
            let seleccionado = false;

            radios.forEach((radio) => {
                if (radio.checked) {
                    seleccionado = true;
                }
            });

            if (seleccionado) {
                const modal = new bootstrap.Modal(document.getElementById('modalDeleteUser'));

                // Escuchar el cierre del modal y limpiar clases si es necesario
                const modalElement = document.getElementById('modalDeleteUser');
                modalElement.addEventListener('hidden.bs.modal', () => {
                    document.body.classList.remove('modal-open');
                    document.querySelector('.modal-backdrop')?.remove();
                });

                modal.show();
            } else {
                alert('Por favor, selecciona una opción.');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>