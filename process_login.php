<?php
require_once("config.php");
require_once("modelo/UsuariosModel.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibir datos del formulario
    $email = trim($_POST['correo']); // Cambiado para coincidir con el formulario
    $password = trim($_POST['contrasena']); // Cambiado para coincidir con el formulario

    if (empty($email) || empty($password)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Instanciar el modelo de usuarios
    $usuariosModel = new UsuariosModel();

    try {
        // Verificar si el usuario existe
        $usuario = $usuariosModel->obtenerUsuarioPorEmail($email);

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Inicio de sesión exitoso: guardar datos en sesión incluyendo el rol
            $_SESSION['usuario'] = [
                'id' => $usuario['id'],
                'nombre' => $usuario['nombre'],
                'email' => $usuario['email'],
                'rol' => $usuario['rol'] // Agregar rol a la sesión
            ];

            // Redirigir según el rol
            switch ($_SESSION['usuario']['rol']) {
                case 'cliente':
                    header("Location: index.php?a=miCuenta");
                    break;
                case 'empleado':
                    header("Location: index.php?a=empleado");
                    break;
                case 'admin':
                    header("Location: index.php?a=administrador");
                    break;
                default:
                    echo "Rol desconocido. Contacta al administrador.";
                    exit;
            }
            exit;
        } else {
            echo "Correo electrónico o contraseña incorrectos.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Método no permitido.";
}
?>