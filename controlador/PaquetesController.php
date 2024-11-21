<?php
require_once('modelo/paqueteModel.php');

class PaquetesController {
    private $paqueteModel;

    public function __construct() {
        $this->paqueteModel = new PaqueteModel();
    }

    public function index() {
        $paquetes = $this->paqueteModel->obtenerPaquetes();
        require_once('vista/paquetes/paquetes.php');
    }

    public function mostrarPromos() {
        require_once('vista/paquetes/promociones.php');
    }

    public function listarPaquetes() {
        $paquetes = $this->paqueteModel->obtenerPaquetes();
        require_once('vista/paquetes/listaPaquetes.php');
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'] ?? '',
                'descripcion' => $_POST['descripcion'] ?? '',
                'precio' => $_POST['precio'] ?? ''
            ];

            // Validar los datos antes de enviarlos al modelo
            if (empty($datos['nombre']) || empty($datos['descripcion']) || empty($datos['precio'])) {
                $error = "Todos los campos son obligatorios.";
            } elseif (!is_numeric($datos['precio']) || $datos['precio'] <= 0) {
                $error = "El precio debe ser un número mayor a 0.";
            } else {
                // Intentar agregar el paquete al modelo
                $resultado = $this->paqueteModel->agregarPaquete($datos);
                if ($resultado) {
                    header("Location: index.php?ruta=paquetes&metodo=listarPaquetes");
                    exit;
                } else {
                    $error = "Error al guardar el paquete. Inténtelo nuevamente.";
                }
            }
        }

        require_once('vista/paquetes/crearPaquete.php');
    }

    public function editar() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header("Location: index.php?ruta=paquetes&metodo=listarPaquetes");
            exit;
        }

        $paquete = $this->paqueteModel->obtenerPaquetePorId($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'] ?? '',
                'descripcion' => $_POST['descripcion'] ?? '',
                'precio' => $_POST['precio'] ?? ''
            ];

            // Validar los datos antes de actualizarlos
            if (empty($datos['nombre']) || empty($datos['descripcion']) || empty($datos['precio'])) {
                $error = "Todos los campos son obligatorios.";
            } elseif (!is_numeric($datos['precio']) || $datos['precio'] <= 0) {
                $error = "El precio debe ser un número mayor a 0.";
            } else {
                $resultado = $this->paqueteModel->actualizarPaquete($id, $datos);
                if ($resultado) {
                    header("Location: index.php?ruta=paquetes&metodo=listarPaquetes");
                    exit;
                } else {
                    $error = "Error al actualizar el paquete. Inténtelo nuevamente.";
                }
            }
        }

        require_once('vista/paquetes/editarPaquete.php');
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $this->paqueteModel->eliminarPaquete($id);
        }

        header("Location: index.php?ruta=paquetes&metodo=listarPaquetes");
    }
}
?>