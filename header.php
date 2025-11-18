<?php
// Asegurarnos de que la sesión esté iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// 1. DEFINIR EL PREFIJO: Si no está definido por el archivo que lo incluye, es la raíz ('').
$path_prefix = $path_prefix ?? ''; 
?>

<header class="header">
    <div class="header-container">
        <a href="<?= $path_prefix ?>index.php" class="logo-container">
            <img src="<?= $path_prefix ?>logo-luxurycars.svg" alt="Luxury Cars" class="logo">
        </a>

        <nav class="nav">
            <a href="<?= $path_prefix ?>index.php">Inicio</a>
            <a href="<?= $path_prefix ?>listado_tabla.php">Especificaciones</a>
            <a href="<?= $path_prefix ?>listado_box.php">Modelos</a>

            <?php if (isset($_SESSION["usuario_id"])): ?>
                <a href="<?= $path_prefix ?>comprar.php">Comprar</a>
                <span class="nav-user">
                    Hola, <?= htmlspecialchars($_SESSION["usuario_nombre"] ?? 'Usuario') ?>
                </span>
                <a href="<?= $path_prefix ?>backend/logout.php" class="logout">Cerrar sesión</a>
            <?php else: ?>
                <a href="<?= $path_prefix ?>login.php">Iniciar sesión</a>
                <a href="<?= $path_prefix ?>register.php">Registrarse</a>
            <?php endif; ?>
        </nav>

        <button class="menu-btn">☰</button>
    </div>

    <div class="mobile-menu">
        <a href="<?= $path_prefix ?>index.php">Inicio</a>
        <a href="<?= $path_prefix ?>listado_tabla.php">Especificaciones</a>
        <a href="<?= $path_prefix ?>listado_box.php">Modelos</a>

        <?php if (isset($_SESSION["usuario_id"])): ?>
            <a href="<?= $path_prefix ?>comprar.php">Comprar</a>
            <span class="nav-user">
                Hola, <?= htmlspecialchars($_SESSION["usuario_nombre"] ?? 'Usuario') ?>
            </span>
            <a href="<?= $path_prefix ?>backend/logout.php" class="logout">Cerrar sesión</a>
        <?php else: ?>
            <a href="<?= $path_prefix ?>login.php">Iniciar sesión</a>
            <a href="<?= $path_prefix ?>register.php">Registrarse</a>
        <?php endif; ?>
    </div>
</header>

<script>
document.querySelector(".menu-btn").onclick = () => {
    document.querySelector(".mobile-menu").classList.toggle("open");
}
</script>