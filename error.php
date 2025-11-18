<?php
$mensaje_error = $_GET['msg'] ?? 'Ocurrió un error inesperado durante la transacción.';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error de Compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include "header.php"; ?>
    <div style="height: 100px;"></div> 
    
    <main class="container section" style="text-align: center;">
        <h1 style="color: #ff6b6b; margin-bottom: 20px;">¡Transacción Fallida!</h1>
        <p style="font-size: 18px; color: #d6d6d6; max-width: 600px; margin: 0 auto;">
            <?= htmlspecialchars($mensaje_error) ?>
        </p>
        <a href="listado_box.php" class="btn" style="margin-top: 30px;">
            Ver otros modelos
        </a>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>