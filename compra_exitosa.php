<?php
session_start();
// Incluimos la conexión a la base de datos
require "backend/db.php"; 

$auto = null;
$error = false;
$compra_id = $_GET['compra_id'] ?? 0;

if ($compra_id > 0) {
    // 1. Consulta SQL: Unir la tabla compras con la tabla autos
    // Obtenemos los datos del auto (modelo, precio, etc.) usando el ID de la compra.
    $sql = "
    SELECT 
        a.marca, a.modelo, a.anio, a.precio, a.nombre_imagen  -- <<< AGREGAR ESTA COLUMNA
    FROM compras c
    JOIN autos a ON c.auto_id = a.id
    WHERE c.id = ?
";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $compra_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $auto = $result->fetch_assoc();
    $stmt->close();
}

if (!$auto) {
    // Esto ocurre si el ID de compra es inválido o no existe
    $error = true;
}

// Variables para la visualización
// DEFINIMOS LAS VARIABLES DENTRO DE ESTE BLOQUE
if ($auto) {
    // Aquí es donde se define la variable que falta
    $modelo_completo = htmlspecialchars($auto['marca'] . ' ' . $auto['modelo'] . ' ' . $auto['anio']); 
    
    $precio_formateado = 'US$ ' . number_format($auto['precio'], 2, ',', '.');
    // Para la imagen, usamos el campo nombre_imagen de la BD
    $nombre_archivo = $auto['nombre_imagen'] ?? 'default.jpg'; 
    $img_path = 'img/' . $nombre_archivo;
} else {
    // Definimos las variables con valores por defecto si no se encontró el auto
    $modelo_completo = 'Vehículo no encontrado';
    $precio_formateado = 'N/A';
    $img_path = 'img/default.jpg';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Compra Exitosa – Luxury Cars</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include "header.php"; ?>
<div style="height: 90px;"></div>

<main class="container section">

    <?php if ($error): ?>
        <div class="card" style="padding: 30px; text-align: center;">
            <h1 style="color: #ff6b6b;">Error al Cargar la Compra</h1>
            <p>No pudimos encontrar los detalles de la compra. Por favor, revisa tu historial.</p>
            <a href="index.php" class="btn btn-primary" style="margin-top: 15px;">Volver al inicio</a>
        </div>
    <?php else: ?>
        
        <div class="product" style="max-width: 900px; margin: 0 auto; padding: 40px; text-align: center;">
            
            <h1 style="color: var(--gold); font-size: 40px; margin-bottom: 5px;">¡Solicitud de Compra Recibida!</h1>
            <p style="color: #69c08c; font-size: 20px; font-weight: 500;">Tu compra fue registrada correctamente.</p>

            <img src="<?= $img_path ?>" alt="<?= $modelo_completo ?>" class="producto-img" style="max-width: 100%; height: auto; margin-top: 30px; border-radius: 8px;">
            
            <div class="card" style="margin-top: 30px; padding: 30px; text-align: left;">
                
                <h3 style="margin-bottom: 20px; color: var(--text);">Detalles del Vehículo Adquirido:</h3>
                
                <ul class="specs" style="list-style: none; padding: 0;">
                    <li><strong>Modelo:</strong> <?= $modelo_completo ?></li>
                    <li><strong>Precio:</strong> <?= $precio_formateado ?></li>
                </ul>
                
                <hr style="border: 0; border-top: 1px dashed rgba(255,255,255,0.1); margin: 25px 0;">

                <h3 style="color: var(--gold); margin-bottom: 10px;">Próximos Pasos</h3>
                <p style="font-size: 16px; line-height: 1.6;">
                    ¡Felicidades por tu nueva adquisición! Nuestro equipo de asesores de lujo **se contactará contigo vía mail** en las próximas 24 horas para coordinar la verificación de datos, el método de pago final y la entrega de tu vehículo.
                </p>

            </div>

            <div class="actions">
                <a href="listado_box.php" class="btn btn-primary">Volver a Modelos</a>
            </div>

        </div>
    <?php endif; ?>

</main>

<?php include "footer.php"; ?>

</body>
</html>