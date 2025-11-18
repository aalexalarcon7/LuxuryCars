<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lamborghini Urus – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Lamborghini Urus 2024</h2>
<p>El super SUV definitivo.</p>

<img src="img/urus.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 4.0 Twin-Turbo</li>
  <li><strong>Potencia:</strong> 641 HP</li>
  <li><strong>0–100 km/h:</strong> 3.6 s</li>
  <li><strong>Velocidad Máxima:</strong> 305 km/h</li>
  <li><strong>Precio:</strong> USD 260.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=urus" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
