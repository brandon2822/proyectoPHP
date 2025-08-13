<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Carrito - LibroNet</title>
  <link rel="stylesheet" href="design.css" />
</head>
<body>
<div class="cart-page">
  <a href="../menu/menu.php">← LibroNet</a>
  <h2>Carrito</h2>
  <div class="cart-item">
    <div class="img-placeholder"></div>
    <div class="info">
      <p>Título</p>
      <p class="author">Autor</p>
    </div>
    <div class="controls">
      <button>-</button>
      <input type="number" value="0" min="0"/>
      <button>+</button>
      <button class="delete-btn">🗑️</button>
    </div>
  </div>
  <div class="cart-item">
    <div class="img-placeholder"></div>
    <div class="info">
      <p>Título</p>
      <p class="author">Autor</p>
    </div>
    <div class="controls">
      <button>-</button>
      <input type="number" value="0" min="0"/>
      <button>+</button>
      <button class="delete-btn">🗑️</button>
    </div>
  </div>
  <div class="cart-footer">
    <p>Total: $0.00</p>
    <button class="checkout-btn">Comprar</button>
  </div>
</div>
</body>
</html>