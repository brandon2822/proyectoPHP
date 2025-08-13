<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - LibroNet</title>
    <link rel="stylesheet" href="./Vista/login_signup/login_signup.css">
</head>
<body>
<div class="container">
    <div class="registro-card">
       
        <div class="registro-formulario">
            <div class="icono-formulario">
                <img src="./Vista/imagenes/decorative1.png.png" alt="Logo" />
            </div>
            <form class="formulario" action="./index.php?controlador=usuario&metodo=LogIn" method="POST">
                <h2>Registro</h2>
                <label for="correo">Correo</label>
                <input type="email" id="correo" placeholder="Correo electrónico" name="correo" required>
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" placeholder="Contraseña" name="contrasena" required>
                <button class="btn-ingresar" id="Ingresar">Ingresar</button>
                <div class="enlaces">
                    <a href="./Vista/newuser/newuser.php">¿Aún no tienes cuenta? ¡Créala ahora!</a>
                    <a href="./Vista/forgotpassword/forgotpassword.php">Olvidé mi contraseña</a>
                    <a href="#">Ingresar como administrador</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var usuario=JSON.stringify(<?php echo $jsonUsuario; ?>);
    usuario =JSON.parse(usuario);
    console.log(usuario)
    </script>
<script src="./Vista/login_signup/login_signup.js"></script>
</body>
</html>
