<?php
session_start();
require 'backend/db.php';

$usuarioLogueado = isset($_SESSION['usuario_id']);

// 1. OBTENER EL CÓDIGO DEL AUTO DE LA URL
$auto_slug = isset($_GET['auto']) ? $_GET['auto'] : '';
$auto_id_seleccionado = null; // Variable para guardar el ID numérico

// Traer autos para el select (incluyendo el "slug" para buscar)
$result = $db->query("SELECT id, marca, modelo, anio, precio FROM autos ORDER BY marca, modelo");
$autos = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $autos[] = $row;
    }
}

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $autos[] = $row;
        
        // 2. BUSCAR EL ID NUMÉRICO SI HAY UN SLUG EN LA URL
        if ($auto_slug && strpos($row['slug'], strtolower($auto_slug)) !== false) {
            $auto_id_seleccionado = $row['id'];
        }
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
        <div class="card" style="max-width: 500px; margin-top: 2rem;">
            <p>Para realizar una compra debés iniciar sesión.</p>
            <a href="login.php?redir=comprar.php" class="btn btn-primary">Iniciar sesión</a>
            <a href="registro.php" class="btn btn-secondary" style="margin-left: 1rem;">Registrarse</a>
        </div>

   <?php else: ?>
        <div class="comprar-card">
            
            <form action="backend/procesar_compra.php" method="post" class="form-compra" id="purchase-form">
                
                <h3>1. Seleccioná tu vehículo</h3>
                <div class="form-control">
                    <label for="modelo">Modelo</label>
                    <select name="auto_id" id="modelo" class="select-premium" required>
                        <option value="">Seleccioná un vehículo</option>
                        <?php foreach ($autos as $auto): ?>
                            <option value="<?= $auto['id']; ?>">
                                <?= $auto['marca'] . ' ' . $auto['modelo'] . ' ' . $auto['anio'] . ' - US$ ' . number_format($auto['precio'], 2, ',', '.'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <h3>2. Datos de Envío y Contacto</h3>
                <div class="form-control">
                    <label for="direccion">Dirección de Entrega Completa</label>
                     <textarea name="direccion" id="direccion" rows="3" required placeholder="Calle, número, ciudad y código postal."></textarea>
                </div>
                
                <h3>3. Notas Adicionales</h3>
                <div class="form-control">
                    <label for="notas">Detalles o requerimientos especiales (Opcional)</label>
                    <textarea name="notas" id="notas" rows="3" placeholder="Ej: Contactar solo por WhatsApp, horario de llamada preferido, etc."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-full" style="margin-top: 30px;">
                    Confirmar Solicitud de Compra
                </button>

                <h3>4. Método de Pago</h3>
                <div class="form-control">
                    <label for="metodo_pago">Método de Pago Preferido</label>
                    <select name="metodo_pago" id="metodo_pago" class="select-premium" required>
                        <option value="">Seleccioná una opción</option>
                        <option value="Transferencia Bancaria">Transferencia Bancaria</option>
                        <option value="Criptomoneda">Criptomoneda</option>
                        <option value="Financiación Propia">Financiación Propia</option>
                </select>
                </div>
            </form>

            <div class="info-box">
                <div class="img-box">
                                    </div>
                
                <h4 style="margin-top: 30px; color: var(--gold);">Proceso de Compra</h4>
                <p style="color: var(--muted); font-size: 14px;">
                    Al confirmar la solicitud, uno de nuestros asesores de lujo se pondrá en contacto contigo en las próximas 24 horas para coordinar la verificación de datos, método de pago y detalles de la entrega.
                </p>
                <ul style="list-style: none; padding: 0; font-size: 15px; color: var(--text);">
                    <li>✅ Inventario exclusivo</li>
                    <li>✅ Asesoramiento personalizado</li>
                    <li>✅ Entrega a domicilio</li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>
</body>
</html>