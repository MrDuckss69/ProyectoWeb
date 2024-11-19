<?php
require_once("modelo/conexion.php");

class UsuariosModel {
    private $db;

    public function __construct() {
        // Inicializa la conexión a la base de datos
        $this->db = Conexion::conectar();
    }

    // Método para registrar un usuario
    public function registrarUsuario($nombre, $apellidos, $email, $password, $telefono, $curp) {
        try {
            $query = $this->db->prepare("
                INSERT INTO usuarios (nombre, apellidos, email, password, telefono, curp)
                VALUES (:nombre, :apellidos, :email, :password, :telefono, :curp)
            ");
            return $query->execute([
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'email' => $email,
                'password' => $password,
                'telefono' => $telefono,
                'curp' => $curp
            ]);
        } catch (PDOException $e) {
            die("Error al registrar el usuario: " . $e->getMessage());
        }
    }

    // Método para obtener un usuario por correo electrónico
    public function obtenerUsuarioPorEmail($email) {
        try {
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->execute(['email' => $email]);
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error al obtener el usuario: " . $e->getMessage());
        }
    }

    // Método para validar las credenciales de inicio de sesión
    public function validarCredenciales($email, $password) {
        try {
            // Busca el usuario por correo electrónico
            $usuario = $this->obtenerUsuarioPorEmail($email);

            // Verifica si el usuario existe y la contraseña es válida
            if ($usuario && password_verify($password, $usuario['password'])) {
                return $usuario;
            }

            // Si no coinciden, regresa null
            return null;
        } catch (PDOException $e) {
            die("Error al validar las credenciales: " . $e->getMessage());
        }
    }

    // Método para obtener todos los usuarios
    public function obtenerTodosLosUsuarios() {
        try {
            $query = $this->db->query("SELECT * FROM usuarios");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error al obtener los usuarios: " . $e->getMessage());
        }
    }

    // Método para eliminar un usuario por ID
    public function eliminarUsuario($id) {
        try {
            $query = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
            $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            die("Error al eliminar el usuario: " . $e->getMessage());
        }
    }
}
?>