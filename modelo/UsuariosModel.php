<?php
require_once("modelo/conexion.php");

class UsuariosModel {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    // Método para registrar un usuario
    public function registrarUsuario($nombre, $apellidos, $email, $password, $telefono, $curp) {
        try {
            // Hashear la contraseña antes de guardarla
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            $query = $this->db->prepare("
                INSERT INTO usuarios (nombre, apellidos, email, password, telefono, curp)
                VALUES (:nombre, :apellidos, :email, :password, :telefono, :curp)
            ");

            return $query->execute([
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'email' => $email,
                'password' => $passwordHash,
                'telefono' => $telefono,
                'curp' => $curp
            ]);
        } catch (PDOException $e) {
            error_log("Error en registrarUsuario: " . $e->getMessage());
            return false;
        }
    }

    // Método para obtener un usuario por correo electrónico
    public function obtenerUsuarioPorEmail($email) {
        try {
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->execute(['email' => $email]);
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerUsuarioPorEmail: " . $e->getMessage());
            return null;
        }
    }

    // Método para validar las credenciales de inicio de sesión
    public function validarCredenciales($email, $password) {
        try {
            $usuario = $this->obtenerUsuarioPorEmail($email);

            if ($usuario && password_verify($password, $usuario['password'])) {
                return $usuario;
            }

            return null;
        } catch (PDOException $e) {
            error_log("Error en validarCredenciales: " . $e->getMessage());
            return null;
        }
    }

    // Método para obtener todos los usuarios
    public function obtenerUsuarios() {
        try {
            $query = $this->db->query("SELECT * FROM usuarios");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en obtenerUsuarios: " . $e->getMessage());
            return [];
        }
    }

    // Método para eliminar un usuario por ID
    public function eliminarUsuario($id) {
        try {
            $query = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
            $result = $query->execute(['id' => $id]);

            if ($result && $query->rowCount() > 0) {
                return true; // Se eliminó al menos un registro
            } else {
                error_log("Error en eliminarUsuario: No se encontró el usuario con ID $id.");
                return false;
            }
        } catch (PDOException $e) {
            error_log("Error en eliminarUsuario: " . $e->getMessage());
            return false;
        }
    }
}
?>