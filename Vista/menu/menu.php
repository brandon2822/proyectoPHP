<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LibroNet</title>
    <link rel="stylesheet" href="menudesign.css" />
</head>
<body>
<div class="fondo-overlay"></div>

<div class="menu-toggle" id="menuToggle">
    <img src="../imagenes/menulateral.png.png" alt="Menú" />
</div>

<div class="hamburger-menu" id="hamburgerMenu">
    <ul>
        <li><a href="#agregar">Agregar producto</a></li>
        <li><a href="#editar">Editar producto</a></li>
        <li><a href="#eliminar">Eliminar producto</a></li>
    </ul>
</div>

<div class="sidebar-menu">
    <div class="sidebar"><br>
        <a href="../login_signup/login_signup.php"><img src="../imagenes/usuario.png.png" alt="Usuario" /></a><br><br>
        <a href="../books/books.php"><img src="../imagenes/book.png.png" alt="Libros" /></a><br><br>
        <a href="../carrito/carrito.php"><img src="../imagenes/carro.png.png" alt="Carrito" /></a><br><br>
        <a href="../notification/notifications.php"><img src="../imagenes/notificacion.png.png" alt="Notificaciones" /></a><br><br>
    </div>
</div>

<div class="main" id="inicio">
    <div class="top-logo">
        <img src="../imagenes/logo.png.png" alt="Logo LibroNet" />
    </div>

    <header>
        <h1>¡Bienvenido, usuario!</h1>
        <p>¿Qué leerás hoy?</p>
    </header>

    <section class="section" id="usuario">
        <div class="section-header">
            <span class="recommendation-label">Recomendaciones</span>
            <div class="search-container">
                <input type="text" placeholder="Buscar libro..." />
                <button class="search-btn">
                    <img src="../imagenes/lupa.png" alt="Buscar" />
                </button>
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="img-placeholder"></div>
                <p id="titulo1">Manual del Conductor</p>
                <p id="autor1" class="author">COSEVI</p>
                <span id ="precio1" class="price">$9.99</span>
                <a href="../libro/libro1.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Un mar de secretos enterrados</p>
                <p class="author">Adrienne Young</p>
                <span class="price">$34.99</span>
                <a href="../libro/libro2.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Una Rosa Maldita</p>
                <p class="author">Rebecca Zanetti</p>
                <span class="price">$23.99</span>
                <a href="../libro/libro3.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Orson Welles</p>
                <p class="author">Santos Zunzunegui</p>
                <span class="price">$33.99</span>
                <a href="../libro/libro4.php"><button class="btn">Ver detalles</button></a>
            </div>
        </div>
    </section>

    <section class="section" id="ofertas">
        <div class="section-title">Libros populares</div>
        <div class="card-container">
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Manual del conductor</p>
                <p class="author">COSEVI</p>
                <span class="price">$9.99</span>
                <a href="../libro/libro1.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Dune 03 Hijos de Dune</p>
                <p class="author">Frank Herbert</p>
                <span class="price">$54.99</span>
                <a href="../libro/libro5.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Próxima estación: Futuro</p>
                <p class="author">Ranga Yogeshwar</p>
                <span class="price">$22.99</span>
                <a href="../libro/libro6.php"><button class="btn">Ver detalles</button></a>
            </div>
            <div class="card">
                <div class="img-placeholder"></div>
                <p>Horror de Dunwich</p>
                <p class="author">H.P Lovecraft</p>
                <span class="price">$39.99</span>
                <a href="../libro/libro7.php"><button class="btn">Ver detalles</button></a>
            </div>
        </div>
    </section>
</div>
<script src="menu.js"></script>
</body>
</html>
