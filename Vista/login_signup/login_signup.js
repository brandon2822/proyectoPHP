
var btnIngresar = document.getElementById('Ingresar');
const input = document.getElementById('inputImagen');
const preview = document.getElementById('imagenPreview');

btnIngresar.addEventListener('DOMContentLoaded', function () {
    if (usuario['correo'] == document.querySelector('#correo').value) {
        alert("Usuario encontrado");
    } else {
        alert("Usuario no encontrado");
    }
}); 


    // if (resultado== null)  {
    //     alert("Usuario no encontrado");
    //     clear();
    // }else {
    //     alert("Ha ingresado correctamente");
    //     clear();
    //     window.location.href = "./Vista/menu/menu.php";
    // }
    

function clear(){
    document.querySelector('#correo').value ="";
    document.querySelector('#contrasena').value ="";
}

// input.addEventListener('change', function () {
//     const file = this.files[0];
//     if (file) {
//         const reader = new FileReader();
//         reader.onload = function (e) {
//             preview.style.backgroundImage = `url('${e.target.result}')`;
//         };
//         reader.readAsDataURL(file);
//     }
// });


