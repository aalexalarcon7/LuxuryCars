<?php
session_start();
// Asegúrate de que esta ruta a tu conexión DB sea correcta
require "db.php"; 

// Obtener datos de la compra
$auto_id = $_POST['auto_id'] ?? null;
$usuario_id = $_SESSION['usuario_id'] ?? null;
// Asume que obtienes estos datos del formulario comprar.php
$direccion_envio = $_POST['direccion'] ?? null; 
$metodo_pago = $_POST['metodo_pago'] ?? null; 

if (!$auto_id || !$usuario_id || !$direccion_envio || !$metodo_pago) {
    // Redirigir si faltan datos esenciales
    header("Location: ../error.php?msg=" . urlencode("Datos de compra o usuario incompletos."));
    exit();
}

// Iniciar una transacción para asegurar atomicidad (o todo se hace, o nada)
$db->begin_transaction();
$compra_exitosa = false;
$compra_id = 0;

try {
    // 1. VERIFICAR STOCK y bloquear la fila (FOR UPDATE)
    $stmt_stock = $db->prepare("SELECT stock FROM autos WHERE id = ? FOR UPDATE");
    $stmt_stock->bind_param("i", $auto_id);
    $stmt_stock->execute();
    $result_stock = $stmt_stock->get_result();
    $auto_data = $result_stock->fetch_assoc();
    $stmt_stock->close();

    // 2. Comprobar disponibilidad
    if (!$auto_data || $auto_data['stock'] <= 0) {
        // Si no hay stock, lanzamos una excepción para ir al catch y hacer rollback
        throw new Exception("Lo sentimos, este vehículo ya no está disponible para la venta.");
    }

    // 3. PROCESAR LA COMPRA (Insertar en la tabla compras)
    $query = $db->prepare("INSERT INTO compras (usuario_id, auto_id, direccion_envio, metodo_pago, fecha_compra) VALUES (?, ?, ?, ?, NOW())");
    $query->bind_param("iiss", $usuario_id, $auto_id, $direccion_envio, $metodo_pago);
    
    if (!$query->execute()) {
        throw new Exception("Error al registrar la compra: " . $db->error);
    }

    $compra_id = $db->insert_id;
    $query->close();

    // 4. REDUCIR EL STOCK (Actualizar la tabla autos)
    $update_stock = $db->prepare("UPDATE autos SET stock = stock - 1 WHERE id = ?");
    $update_stock->bind_param("i", $auto_id);

    if (!$update_stock->execute()) {
        throw new Exception("Error al actualizar el stock.");
    }
    $update_stock->close();

    // 5. Si todo fue bien, confirmar la transacción y liberar el bloqueo
    $db->commit();
    $compra_exitosa = true;

} catch (Exception $e) {
    // Si algo falló (incluyendo falta de stock), revertir la transacción
    $db->rollback();
    // Redirigir a una página de error con el mensaje
    header("Location: ../error.php?msg=" . urlencode($e->getMessage()));
    exit();
}

// 6. Redirigir a la página de éxito
if ($compra_exitosa) {
    header("Location: ../compra_exitosa.php?compra_id=" . $compra_id);
    exit();
}
?>