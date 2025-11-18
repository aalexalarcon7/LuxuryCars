<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bentley Continental GT – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>
<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Bentley Continental GT 2023</h2>
<p>La elegancia británica llevada al máximo nivel.</p>

<img src="img/continental.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> W12 6.0L</li>
  <li><strong>Potencia:</strong> 626 HP</li>
  <li><strong>0–100 km/h:</strong> 3.6 s</li>
  <li><strong>Velocidad Máxima:</strong> 333 km/h</li>
  <li><strong>Precio:</strong> USD 330.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=continental" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
