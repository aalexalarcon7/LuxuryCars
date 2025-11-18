<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porsche 911 Turbo S – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>
<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Porsche 911 Turbo S 2023</h2>
<p>El equilibrio perfecto entre rendimiento y sofisticación alemana.</p>

<img src="img/911turbo.jpg" class="producto-img">

<p>
El Porsche 911 Turbo S ofrece una aceleración brutal, una precisión quirúrgica en curvas
y una estética totalmente icónica.
</p>

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> 3.8L Bóxer Twin-Turbo</li>
  <li><strong>Potencia:</strong> 640 HP</li>
  <li><strong>0–100 km/h:</strong> 2.6 s</li>
  <li><strong>Velocidad Máxima:</strong> 330 km/h</li>
  <li><strong>Precio:</strong> USD 230.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=911turbo" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
