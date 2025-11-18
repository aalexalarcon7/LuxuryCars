<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aston Martin DBX707 – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Aston Martin DBX 707 2023</h2>
<p>El SUV de lujo más rápido del mundo.</p>

<img src="img/dbx707.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 4.0L Twin-Turbo</li>
  <li><strong>Potencia:</strong> 697 HP</li>
  <li><strong>0–100 km/h:</strong> 3.1 s</li>
  <li><strong>Velocidad Máxima:</strong> 310 km/h</li>
  <li><strong>Precio:</strong> USD 310.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=dbx707" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>

