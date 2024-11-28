// Función para importar un archivo HTML y devolverlo como un elemento DOM
async function cargarHTML(ruta) {
    try {
        // Cargar el archivo HTML con fetch
        const response = await fetch(ruta);
        if (!response.ok) {
            throw new Error(`Error al cargar el archivo: ${response.statusText}`);
        }
        // Obtener el contenido como texto
        const html = await response.text();

        // Crear un contenedor temporal para convertir el HTML en elementos del DOM
        const contenedor = document.createElement('div');
        contenedor.innerHTML = html;

        // Devolver el primer hijo del contenedor (en este caso, el modal)
        return contenedor.firstElementChild;
    } catch (error) {
        console.error('Error al cargar el archivo HTML:', error);
    }
}

// Ejemplo de uso
document.getElementById('btnUpdateUser').addEventListener('click', async () => {
    // Cargar el modal desde el archivo modal.html
    const modal = await cargarHTML('./updateUser.html');

    if (modal) {
        // Insertar el modal en el DOM
        document.body.appendChild(modal);

        // Mostrar el modal usando Bootstrap
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
    }
});
