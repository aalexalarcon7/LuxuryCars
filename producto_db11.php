<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aston Martin DB11 – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Aston Martin DB11 V8 2022</h2>
<p>El equilibrio perfecto entre elegancia y deportividad.</p>

<img src="img/db11.jpg" class="producto-img">

<p>
El Aston Martin DB11 representa la filosofía británica del lujo refinado. Su V8 Twin-Turbo ofrece potencia, suavidad y una estética atemporal.
</p>

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> 4.0L V8 Twin-Turbo</li>
  <li><strong>Potencia:</strong> 503 HP</li>
  <li><strong>0–100 km/h:</strong> 4.0 s</li>
  <li><strong>Velocidad Máxima:</strong> 301 km/h</li>
  <li><strong>Precio:</strong> USD 250.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=db11" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>

