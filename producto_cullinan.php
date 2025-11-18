<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rolls-Royce Cullinan – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>
<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Rolls-Royce Cullinan 2024</h2>
<p>El SUV más lujoso del planeta.</p>

<img src="img/cullinan.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V12 6.75L Biturbo</li>
  <li><strong>Potencia:</strong> 563 HP</li>
  <li><strong>0–100 km/h:</strong> 5.2 s</li>
  <li><strong>Velocidad Máxima:</strong> 250 km/h</li>
  <li><strong>Precio:</strong> USD 370.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=cullinan" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>

