<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lamborghini Aventador – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>
<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Lamborghini Aventador Ultimae</h2>
<p>La obra maestra final del legendario V12 atmosférico.</p>

<img src="img/aventador.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V12 6.5L</li>
  <li><strong>Potencia:</strong> 770 HP</li>
  <li><strong>0–100 km/h:</strong> 2.8 s</li>
  <li><strong>Velocidad Máxima:</strong> 351 km/h</li>
  <li><strong>Precio:</strong> USD 500.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=aventador" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
