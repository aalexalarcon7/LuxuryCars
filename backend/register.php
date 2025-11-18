<?php
session_start();
require_once "db.php";

// Si ya está logueado, redirigir
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($nombre) || empty($email) || empty($password)) {
        die("Todos los campos son obligatorios.");
    }

    // Verificar si el email ya existe
    $stmt = $db->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Ese email ya está registrado.");
    }

    // Insertar usuario
    $stmt = $db->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $password);

    if ($stmt->execute()) {
        header("Location: ../login.php");
        exit();
    } else {
        die("Error al registrar el usuario.");
    }
}
?>
