<?php
session_start();
require 'db.php';

$usuarioLogueado = isset($_SESSION['usuario_id']);

// Traer autos para el select
$result = $conexion->query("SELECT id, marca, modelo, anio, precio FROM autos ORDER BY marca, modelo");
$autos = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $autos[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprar vehículo - Luxury Cars</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header.php'; ?>
<div style="height: 90px;"></div>

<main class="container section">
    <h1>Comprar un vehículo</h1>
    <p>Seleccioná el modelo que deseás adquirir.</p>

    <?php if (!$usuarioLogueado): ?>
        <!-- SI NO ESTÁ LOGUEADO -->
        <div class="card" style="max-width: 500px; margin-top: 2rem;">
            <p>Para realizar una compra debés iniciar sesión.</p>
            <a href="login.php?redir=comprar.php" class="btn btn-primary">Iniciar sesión</a>
            <a href="registro.php" class="btn btn-secondary" style="margin-left: 1rem;">Registrarse</a>
        </div>

    <?php else: ?>
        <!-- SI ESTÁ LOGUEADO -->
        <div class="card" style="max-width: 600px; margin-top: 2rem;">
            <form action="procesar_compra.php" method="post" class="form-compra">
                <div class="form-control">
                    <label for="modelo">Modelo</label>
                    <select name="auto_id" id="modelo" required>
                        <option value="">Seleccioná un vehículo</option>
                        <?php foreach ($autos as $auto): ?>
                            <option value="<?= $auto['id']; ?>">
                                <?= $auto['marca'] . ' ' . $auto['modelo'] . ' ' . $auto['anio'] . ' - US$ ' . number_format($auto['precio'], 2, ',', '.'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Confirmar compra
                </button>
            </form>
        </div>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
