<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña • LibroNet</title>
    <link rel="stylesheet" href="forgotpassword.css">
</head>
<body>
<main class="wrap">
    <section class="card">
        <h1>Recuperar contraseña</h1>

        <img class="hero-illust" src="../imagenes/decorative7.png" alt="Ilustración de recuperación">

        <p class="lead">
            Escribe tu correo y te enviaremos un enlace para restablecer tu contraseña.
        </p>

        <form class="form" method="post">
            <label for="email" class="label">Correo electrónico</label>
            <input id="email" name="email" type="email" placeholder="tucorreo@ejemplo.com" required>

            <a href="../newpassword/newpassword.php"></a><button type="submit" class="btn">Enviar enlace</button></a>
        </form>

        <div class="meta">
            ¿Recordaste tu contraseña?
            <a href="../login_signup/login_signup.php">Inicia sesión</a>
        </div>
    </section>
</main>
</body>
</html>
