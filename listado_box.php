<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modelos – Luxury Cars</title>
  <link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?>
<div style="height: 90px;"></div>

<main class="container section">

  <h2>Modelos disponibles</h2>

  <!-- TARJETAS -->
  <div id="grid-autos" class="grid-autos"></div>

</main>

<?php include "footer.php"; ?>


<script>
// =========================
// LISTA DE AUTOS
// =========================
const AUTOS = [
  { id:"vantage", marca:"Aston Martin", modelo:"Vantage 2023", precio:300000, img:"img/vantage.jpg" },
  { id:"db11", marca:"Aston Martin", modelo:"DB11 V8 2022", precio:250000, img:"img/db11.jpg" },
  { id:"dbx707", marca:"Aston Martin", modelo:"DBX 707 2023", precio:310000, img:"img/dbx707.jpg" },

  { id:"continental", marca:"Bentley", modelo:"Continental GT 2023", precio:330000, img:"img/continental.jpg" },
  { id:"bentayga", marca:"Bentley", modelo:"Bentayga 2022", precio:340000, img:"img/bentayga.jpg" },
  { id:"flyingspur", marca:"Bentley", modelo:"Flying Spur 2023", precio:305000, img:"img/flyingspur.jpg" },

  { id:"roma", marca:"Ferrari", modelo:"Roma 2024", precio:270000, img:"img/roma.jpg" },
  { id:"sf90", marca:"Ferrari", modelo:"SF90 Stradale", precio:520000, img:"img/sf90.jpg" },

  { id:"aventador", marca:"Lamborghini", modelo:"Aventador Ultimae", precio:500000, img:"img/aventador.jpg" },
  { id:"urus", marca:"Lamborghini", modelo:"Urus 2024", precio:260000, img:"img/urus.jpg" },

  { id:"911turbo", marca:"Porsche", modelo:"911 Turbo S 2023", precio:230000, img:"img/911turbo.jpg" },

  { id:"gwagon", marca:"Mercedes-AMG", modelo:"G 63 AMG 2024", precio:180000, img:"img/gwagon.jpg" },

  { id:"cullinan", marca:"Rolls-Royce", modelo:"Cullinan 2024", precio:370000, img:"img/cullinan.jpg" }
];

// =========================
// PRECIOS
// =========================
const money = v =>
  new Intl.NumberFormat('es-AR', {
    style: 'currency',
    currency: 'USD'
  }).format(v);

// =========================
//  TARJETAS
// =========================
document.getElementById("grid-autos").innerHTML =
AUTOS.map(a => `
  <div class="card fade-in">
    <div class="media"><img src="${a.img}" alt="${a.modelo}"></div>
    <div class="body">
      <span class="tag">${a.marca}</span>
      <h3 class="title">${a.modelo}</h3>
      <p class="price">${money(a.precio)}</p>
      <div class="actions">
        <a href="producto_${a.id}.php" class="btn">Ver auto</a>
        <a href="comprar.php?auto=${a.id}" class="btn">Comprar</a>
      </div>
    </div>
  </div>
`).join("");

// =========================
// ANIMACIONES
// =========================
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) e.target.classList.add('show');
  });
});

document.querySelectorAll('.fade-in').forEach(el => obs.observe(el));

</script>

</body>
</html>
