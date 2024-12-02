
function cleanForm(){
    document.getElementById('formRegisterUser').addEventListener('submit', function(event) {
        // Dejar que el formulario se envíe antes de resetearlo
        setTimeout(() => {
            this.reset(); // Limpiar todos los campos
        }, 200); // Espera 100ms para asegurar que los datos se envíen primero
    });
}
