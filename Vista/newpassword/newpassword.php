<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva contraseña</title>
    <link rel="stylesheet" href="newpassword.css">
</head>
<body>
<main class="wrap">
    <section class="card">
        <h1>Recuperar contraseña</h1>
        <img class="hero-illust" src="../imagenes/decorative8.png" alt="Ilustración de recuperación">
        <p class="lead">
            Escribe tu nueva contraseña.
        </p>
        <form class="form" method="post">
            <label for="password" class="label">Contraseña</label>
            <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" required>
            <label for="confirm_password" class="label">Confirmar contraseña</label>
            <input id="confirm_password" name="confirm_password" type="password" placeholder="Confirma tu contraseña" required>
            <a href="../menu/menu.php">
                <button type="submit" class="btn">Aceptar</button>
            </a>
        </form>
    </section>
</main>
</body>
</html>
