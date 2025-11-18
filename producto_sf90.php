<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ferrari SF90 Stradale – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Ferrari SF90 Stradale</h2>
<p>El híbrido más potente que Ferrari haya construido.</p>

<img src="img/sf90.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 4.0L Biturbo + 3 Motores Eléctricos</li>
  <li><strong>Potencia Total:</strong> 986 HP</li>
  <li><strong>0–100 km/h:</strong> 2.5 s</li>
  <li><strong>Velocidad Máxima:</strong> 340 km/h</li>
  <li><strong>Precio:</strong> USD 520.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=sf90" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>

