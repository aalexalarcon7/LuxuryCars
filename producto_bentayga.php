<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bentley Bentayga – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>
<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Bentley Bentayga 2022</h2>
<p>Un SUV que redefine el lujo y la presencia.</p>

<img src="img/bentayga.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 Twin-Turbo</li>
  <li><strong>Potencia:</strong> 542 HP</li>
  <li><strong>0–100 km/h:</strong> 4.4 s</li>
  <li><strong>Velocidad Máxima:</strong> 290 km/h</li>
  <li><strong>Precio:</strong> USD 340.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=bentayga" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>

