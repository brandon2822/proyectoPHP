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
            <form class="formulario" action="./index.php?controlador=usuario&metodo=login" method="POST">
                <h2>Registro</h2>
                <label class="form-label" for="correo">Correo</label>
                <input class="form-control" type="email" id="correo" placeholder="Correo electrónico" name="correo" required>
                <label class="form-label" for="contrasena">Contraseña</label>
                <input class="form-control" type="password" id="contrasena" placeholder="Contraseña" name="contrasena" required>
                <button type="submit" class="btn-ingresar" id="Ingresar">Ingresar</button>
                <div class="enlaces">
                    <a href="./Vista/newuser/newuser.php">¿Aún no tienes cuenta? ¡Créala ahora!</a>
                    
                    
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    <?php if (isset($jsonUsuario) && $jsonUsuario !== "null"): ?>
        var usuario = <?php echo $jsonUsuario; ?>;
        console.log("Usuario recibido:", usuario);
    <?php else: ?>
        var usuario = null;
        console.log("No se recibió información de usuario o es null");
    <?php endif; ?>
    </script>
<script src="./Vista/login_signup/login_signup.js"></script>
</body>
</html>
