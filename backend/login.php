<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("Debes completar todos los campos.");
    }

    $stmt = $db->prepare("SELECT id, nombre, password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $nombre, $pass_db);

    if ($stmt->fetch()) {
        if ($password === $pass_db) { // sin hash
            $_SESSION['usuario_id'] = $id;
            $_SESSION['usuario_nombre'] = $nombre;

            header("Location: ../index.php");
            exit();
        } else {
            die("Contraseña incorrecta.");
        }
    } else {
        die("No existe una cuenta con ese correo.");
    }
}
?>
