<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bentley Flying Spur – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Bentley Flying Spur 2023</h2>
<p>La berlina de lujo definitiva.</p>

<img src="img/flyingspur.jpg" class="producto-img">

<p>
El Bentley Flying Spur representa lo más alto del lujo británico. Combina potencia, comodidad y un interior artesanal impecable.
</p>

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 4.0 Twin-Turbo</li>
  <li><strong>Potencia:</strong> 542 HP</li>
  <li><strong>0–100 km/h:</strong> 4.1 s</li>
  <li><strong>Velocidad Máxima:</strong> 318 km/h</li>
  <li><strong>Precio:</strong> USD 305.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=flyingspur" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>
