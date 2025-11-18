<?php
session_start();
session_unset();
session_destroy();

header("Location: ../index.php"); // Nota: Si logout.php está en 'backend/', la redirección debe ser '..'
exit;