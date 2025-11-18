<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Especificaciones – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>
<div style="height: 90px;"></div>

<main class="container section">

  <h2>Especificaciones técnicas</h2>
  <p>Compará todos nuestros modelos disponibles.</p>

  <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Precio</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="tabla-autos"></tbody>
    </table>
  </div>

</main>

<?php include "footer.php"; ?>

<script>
const AUTOS = [
  { id:"vantage", marca:"Aston Martin", modelo:"Vantage 2023", precio:300000 },
  { id:"db11", marca:"Aston Martin", modelo:"DB11 V8 2022", precio:250000 },
  { id:"dbx707", marca:"Aston Martin", modelo:"DBX 707 2023", precio:310000 },
  { id:"continental", marca:"Bentley", modelo:"Continental GT 2023", precio:330000 },
  { id:"bentayga", marca:"Bentley", modelo:"Bentayga 2022", precio:340000 },
  { id:"flyingspur", marca:"Bentley", modelo:"Flying Spur 2023", precio:305000 },
  { id:"roma", marca:"Ferrari", modelo:"Roma 2024", precio:270000 },
  { id:"sf90", marca:"Ferrari", modelo:"SF90 Stradale", precio:520000 },
  { id:"aventador", marca:"Lamborghini", modelo:"Aventador Ultimae", precio:500000 },
  { id:"urus", marca:"Lamborghini", modelo:"Urus 2024", precio:260000 },
  { id:"911turbo", marca:"Porsche", modelo:"911 Turbo S 2023", precio:230000 },
  { id:"gwagon", marca:"Mercedes-AMG", modelo:"G 63 AMG 2024", precio:180000 },
  { id:"cullinan", marca:"Rolls-Royce", modelo:"Cullinan 2024", precio:370000 }
];

const money = v => new Intl.NumberFormat('es-AR',{style:'currency',currency:'USD'}).format(v);

document.getElementById("tabla-autos").innerHTML =
AUTOS.map(a => `
<tr>
  <td>${a.marca}</td>
  <td>${a.modelo}</td>
  <td>${money(a.precio)}</td>
  <td>
    <a href="producto_${a.id}.php" class="btn">Ver auto</a>
    <a href="comprar.php?auto=${a.id}" class="btn">Comprar</a>
  </td>
</tr>
`).join("");

</script>

</body>
</html>
