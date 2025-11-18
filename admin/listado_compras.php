<?php 
session_start();
// DEFINIMOS EL PREFIJO PARA SALIR DE LA CARPETA 'admin'
$path_prefix = '../'; 
require '../backend/db.php'; 


$sql = "
    SELECT 
        c.id AS compra_id, c.fecha_compra, c.direccion_envio, c.metodo_pago,
        u.nombre AS comprador_nombre, u.email AS comprador_email,
        a.marca, a.modelo, a.anio, a.precio
    FROM compras c
    JOIN usuarios u ON c.usuario_id = u.id
    JOIN autos a ON c.auto_id = a.id
    ORDER BY c.fecha_compra DESC
";

$result = $db->query($sql);
$compras = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="<?= $path_prefix ?>styles.css"> 
    <style>
        /* Ajuste específico para la tabla de admin */
        .admin-table-wrap { margin-top: 30px; }
        .admin-table-wrap th { font-size: 14px; }
        .admin-table-wrap td { font-size: 14px; }
        .status-badge { 
            background: #2a3a31; color: #a9f0ac; padding: 4px 8px; border-radius: 6px; 
            font-size: 12px;
        }
    </style>
</head>
<body>

<?php include '../header.php'; // Usa el prefijo definido arriba ?>
<div style="height: 100px;"></div>

<main class="container section">
    <h1 style="color: var(--gold);">Listado de Compras (Admin)</h1>
    <p class="lead">Vista detallada de todas las solicitudes de compra registradas en el sistema.</p>
    
    <?php if (empty($compras)): ?>
        <p style="text-align: center; margin-top: 50px;">Aún no hay compras registradas.</p>
    <?php else: ?>
        <div class="admin-table-wrap table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID Compra</th>
                        <th>Fecha</th>
                        <th>Vehículo</th>
                        <th>Precio</th>
                        <th>Comprador</th>
                        <th>Email Contacto</th>
                        <th>Método Pago</th>
                        <th>Dirección de Envío</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($compras as $compra): ?>
                    <tr>
                        <td><?= $compra['compra_id'] ?></td>
                        <td><?= date('d/m/Y H:i', strtotime($compra['fecha_compra'])) ?></td>
                        <td><?= $compra['marca'] . ' ' . $compra['modelo'] . ' (' . $compra['anio'] . ')' ?></td>
                        <td style="color: var(--gold); font-weight: 600;">US$ <?= number_format($compra['precio'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($compra['comprador_nombre']) ?></td>
                        <td><a href="mailto:<?= htmlspecialchars($compra['comprador_email']) ?>" class="link"><?= htmlspecialchars($compra['comprador_email']) ?></a></td>
                        <td><span class="status-badge"><?= $compra['metodo_pago'] ?></span></td>
                        <td><?= htmlspecialchars($compra['direccion_envio']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p style="margin-top: 20px; font-size: 14px; color: var(--muted);">Total de ventas registradas: <?= count($compras) ?></p>
    <?php endif; ?>
</main>

<?php include '../footer.php'; ?>

</body>
</html>