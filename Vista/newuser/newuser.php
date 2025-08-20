<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datos Personales</title>
    <link rel="stylesheet" href="/PROYECTO/Vista/newuser/newuser.css" />
</head>
<body>
<a href="/PROYECTO/Vista/login_signup/login_signup.php" class="back-arrow">
    &#8592;
</a>
<div class="fondo-overlay"></div>
<div class="contenedor">
    <div class="columna-izquierda">
        <div class="logo-libronet">
            <img src="/PROYECTO/Vista/imagenes/logo.png.png" alt="Logo LibroNet" />
        </div>
        <form class="formulario-datos" action="/PROYECTO/index.php?controlador=usuario&metodo=signup" method="POST">
            <h2>Datos personales</h2>
            
            <?php if (isset($mensaje)): ?>
                <div class="mensaje <?php echo $tipoMensaje; ?>">
                    <?php echo $mensaje; ?>
                </div>
            <?php endif; ?>
            
            <label class="form-label" for="nombre">Nombre</label>
            <input name="nombre" class="form-control" type="text" id="nombre" placeholder="Nombre" required />

            <label class="form-label" for="apellido">Apellido</label>
            <input name="apellido" class="form-control" type="text" id="apellido" placeholder="Apellido" required />

            <label class="form-label" for="correo">Correo electrónico</label>
            <input name="correo" class="form-control" type="email" id="correo" placeholder="Correo electronico" required />

            <label class="form-label" for="contrasena">Contraseña</label>
            <input name="contrasena" class="form-control" type="password" id="contrasena" placeholder="Contraseña" required />

            <label class="form-label" for="usuario">Nombre de usuario</label>
            <input name="usuario" class="form-control" type="text" id="usuario" placeholder="Nombre de usuario" required />

            <label class="form-label" for="fecha">Fecha de nacimiento</label>
            <input name="fechaNacimiento" class="form-control" type="date" id="fecha" required />

            <label class="form-label" for="pais">País de origen</label>
            <input name="pais" class="form-control" type="text" id="pais" placeholder="País de origen" required />

            <button type="submit" id="btn-guardar">Guardar</button>
        </form>
    </div>
</div>

<script>
    <?php if (isset($usuarioCreado) && $usuarioCreado === true): ?>
        var usuarioCreado = true;
        var mensaje = "<?php echo isset($mensaje) ? addslashes($mensaje) : ''; ?>";
        <?php if (isset($jsonUsuario)): ?>
            var jsonUsuario = <?php echo $jsonUsuario; ?>;
            console.log("Datos del usuario:", jsonUsuario);
        <?php endif; ?>
        console.log("Usuario creado exitosamente");
    <?php else: ?>
        var usuarioCreado = false;
        var mensaje = "<?php echo isset($mensaje) ? addslashes($mensaje) : ''; ?>";
        console.log("Usuario no creado o error en el proceso");
    <?php endif; ?>
</script>
<script src="/PROYECTO/Vista/newuser/newuser.js"></script>
</body>
</html>