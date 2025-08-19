document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM cargado, verificando estado del registro...");
    console.log("Usuario creado:", usuarioCreado);
    console.log("Mensaje:", mensaje);
    
    // Verificar si el usuario fue creado exitosamente
    if (usuarioCreado === true) {
        console.log("Usuario registrado exitosamente");
        
        // Mostrar mensaje de éxito
        if (mensaje) {
            mostrarMensaje(mensaje, 'success');
        }
        
        // Redirigir al login después de 3 segundos
        setTimeout(function() {
            console.log("Redirigiendo al login...");
            window.location.href = "./Vista/login_signup/login_signup.php";
        }, 3000);
        
    } else if (mensaje && mensaje !== "") {
        // Mostrar mensaje de error si existe
        console.log("Error en el registro:", mensaje);
        mostrarMensaje(mensaje, 'error');
    }
});

function mostrarMensaje(mensaje, tipo) {
    // Crear elemento de mensaje si no existe
    let mensajeDiv = document.querySelector('.mensaje');
    if (!mensajeDiv) {
        mensajeDiv = document.createElement('div');
        mensajeDiv.className = 'mensaje';
        
        // Insertar después del h2
        const h2 = document.querySelector('h2');
        if (h2) {
            h2.parentNode.insertBefore(mensajeDiv, h2.nextSibling);
        }
    }
    
    mensajeDiv.textContent = mensaje;
    mensajeDiv.className = 'mensaje ' + tipo;
    
    // Auto-ocultar mensajes de error después de 5 segundos
    if (tipo === 'error') {
        setTimeout(function() {
            if (mensajeDiv && mensajeDiv.parentNode) {
                mensajeDiv.style.display = 'none';
            }
        }, 5000);
    }
}

function limpiarFormulario() {
    const form = document.querySelector('.formulario-datos');
    if (form) {
        form.reset();
    }
}