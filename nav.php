<header class="navbar">
    <div class="container wrap">
        <a class="brand" href="index.php">
            <img src="logo-luxurycars.svg" alt="Luxury Car's">
            <span>Luxury Car's</span>
        </a>

        <button class="nav-toggle" onclick="document.querySelector('.nav').classList.toggle('is-open')">☰</button>

        <nav class="nav">
            <a href="index.php">Inicio</a>
            <a href="listado_tabla.php">Especificaciones</a>
            <a href="listado_box.php">Modelos</a>
            <a href="comprar.php">Comprar</a>

            <?php if(isset($_SESSION["user"])): ?>
                <a href="backend/logout.php" class="logout">Cerrar sesión</a>
            <?php else: ?>
                <a href="login.php">Iniciar sesión</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
