<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercedes-AMG G63 – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>

<main class="container section">

<h2>Mercedes-AMG G 63 2024</h2>
<p>El ícono del lujo todoterreno.</p>

<img src="img/gwagon.jpg" class="producto-img">

<h3>Ficha técnica</h3>
<ul>
  <li><strong>Motor:</strong> V8 4.0 Biturbo</li>
  <li><strong>Potencia:</strong> 577 HP</li>
  <li><strong>0–100 km/h:</strong> 4.5 s</li>
  <li><strong>Velocidad Máxima:</strong> 240 km/h</li>
  <li><strong>Precio:</strong> USD 180.000</li>
</ul>

<div class="actions">
    <a href="comprar.php?auto=gwagon" class="btn">Comprar</a>
    <a href="listado_box.php" class="btn">Volver al catálogo</a>
</div>

</main>

<?php include "footer.php"; ?>

</body>
</html>


