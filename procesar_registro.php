<?php
require_once("config.php");
require_once("modelo/UsuariosModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validar datos del formulario
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['correo']); // Cambiado a 'correo'
    $password = trim($_POST['contrasena']); // Cambiado a 'contrasena'
    $telefono = trim($_POST['telefono']);
    $curp = trim($_POST['curp']);

    if (empty($nombre) || empty($apellidos) || empty($email) || empty($password) || empty($telefono) || empty($curp)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Hashear la contraseña
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Instanciar el modelo de usuarios
    $usuariosModel = new UsuariosModel();

    try {
        // Registrar el usuario
        if ($usuariosModel->registrarUsuario($nombre, $apellidos, $email, $passwordHash, $telefono, $curp)) {
            header("Location: index.php?u=login"); // Redirigir al login si el registro es exitoso
            exit;
        } else {
            echo "Error al registrar el usuario. Por favor, intenta de nuevo.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Método no permitido.";
}
?>