<?php require "backend/db.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar sesión – Luxury Car's</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php"; ?> 

<div style="height: 90px;"></div>

<main class="container section">

  <h2>Iniciar sesión</h2>

  <?php if(isset($_GET["error"])): ?>
    <p style="color:#ff6b6b">Credenciales incorrectas.</p>
  <?php endif; ?>

  <form class="form" method="POST" action="backend/login.php">

    <div class="field full">
      <label>Email</label>
      <input type="email" name="email" required>
    </div>

    <div class="field full">
      <label>Contraseña</label>
      <input type="password" name="password" required>
    </div>

    <button class="btn">Ingresar</button>
  </form>

</main>
<?php include "footer.php"; ?>

</body>
</html>
