document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM cargado, verificando usuario...");
    console.log("Valor de usuario:", usuario);
    console.log("Tipo de usuario:", typeof usuario);
    
    // Verificar si usuario existe y tiene datos válidos
    if (usuario !== null && usuario !== undefined && typeof usuario === 'object') {
        console.log("Usuario es un objeto:", usuario);
        
        // Verificar si el usuario tiene un ID válido
        if (usuario.id && usuario.id !== null) {
            console.log("Usuario válido encontrado, redirigiendo a menu...");
            window.location.href = "./Vista/menu/menu.php";
        } else {
            console.log("Usuario sin ID válido");
            // Solo mostrar error si venimos de un intento de login
            if (window.location.search.includes('metodo=login')) {
                mostrarError("Error en los datos del usuario");
            }
        }
    } else {
        console.log("No hay usuario válido");
        // Solo mostrar error si venimos de un intento de login
        if (window.location.search.includes('metodo=login')) {
            mostrarError("Usuario no encontrado. Verifica tu correo y contraseña.");
        }
    }
});

function mostrarError(mensaje) {
    alert(mensaje);
    limpiarFormulario();
}

function limpiarFormulario() {
    const form = document.querySelector('.formulario');
    if (form) {
        form.reset();
    }
}