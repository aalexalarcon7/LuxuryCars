<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ferrari Roma – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Ferrari Roma 2024</h2>
<p>La nueva interpretación del gran turismo italiano.</p>

<img src="img/roma.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 3.9 Twin-Turbo</li>
  <li><strong>Potencia:</strong> 612 HP</li>
  <li><strong>0–100 km/h:</strong> 3.4 s</li>
  <li><strong>Velocidad Máxima:</strong> 320 km/h</li>
  <li><strong>Precio:</strong> USD 270.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=roma" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
