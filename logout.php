<?php
session_start(); // Inicia la sesión
session_destroy(); // Destruye todos los datos de la sesión
header("Location: index.php"); // Redirige al inicio
exit;
?>