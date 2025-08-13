<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="profile.css" />
</head>
<body>
<div class="overlay-transparente"></div>
<div class="contenedor-perfil">
    <div class="tarjeta-perfil">
        <div class="imagen-perfil">
            <img id="imagenPerfil" src="../imagenes/decorative14.png" alt="Foto de perfil del usuario" />
        </div>
    </div>
    <button class="icono-editar">
        <img src="../imagenes/edit.png" alt="Editar perfil">
    </button>
    <div class="datos-usuario">
        <div class="logo-libronet">
            <a href="../menu/menu.php"><img src="../imagenes/logo.png.png" class="logo"/></a>
        </div>
        <h2 id="nombrePerfil"></h2>
        <p><strong>País:</strong> <span id="paisPerfil"></span></p>
        <p><strong>Fecha de nacimiento:</strong> <span id="fechaPerfil"></span></p>
        <p><strong>Correo electrónico:</strong> <span id="correoPerfil"></span></p>
        <div class="descripcion">
            <p><strong>Descripción:</strong></p>
            <p id="descripcionPerfil"></p>
        </div>
    </div>
    <a href="../newuser/newuser.php" class="icono-editar">
        <img src="../imagenes/edit.png" alt="Editar perfil">
    </a>
</div>
</body>
</html>
