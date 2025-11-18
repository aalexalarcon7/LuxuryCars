<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Registrarse – Luxury Car's</title>
<link rel="stylesheet" href="styles.css?v=100">
</head>

<body>

<?php include "header.php"; ?> 

<div style="height: 90px;"></div>

<main class="container section">

  <h2>Crear cuenta</h2>

  <form class="form" method="POST" action="backend/register.php">

    <div class="field full">
      <label>Nombre completo</label>
      <input type="text" name="nombre" required>
    </div>

    <div class="field full">
      <label>Email</label>
      <input type="email" name="email" required>
    </div>

    <div class="field full">
      <label>Contraseña</label>
      <input type="password" name="password" required>
    </div>

    <button class="btn">Registrarme</button>
  </form>

</main>

<?php include "footer.php"; ?>

</body>
</html>
