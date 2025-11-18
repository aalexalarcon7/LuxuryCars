<?php
$db = new mysqli("localhost", "root", "root", "luxurycars");

if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

$db->set_charset("utf8");
?>
