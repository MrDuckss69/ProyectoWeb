<?php
require_once('modelo/paqueteModel.php');

class PaquetesController {
    private $paqueteModel;

    public function __construct() {
        // Inicializa el modelo de paquetes
        $this->paqueteModel = new PaqueteModel();
    }

    // Método para mostrar la lista de paquetes en la vista principal
    public function index() {
        $paquetes = $this->paqueteModel->obtenerPaquetes();
        require_once('vista/paquetes/paquetes.php');
    }

    // Método para mostrar la lista de promociones
    public function mostrarPromos() {
        require_once('vista/paquetes/promociones.php');
    }

    // Método para mostrar todos los paquetes
    public function listarPaquetes() {
        $paquetes = $this->paqueteModel->obtenerPaquetes(); // Obtener paquetes desde el modelo
        require_once('vista/paquetes/listaPaquetes.php'); // Cargar la vista
    }

    // Método para mostrar el formulario de creación
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'precio' => $_POST['precio']
            ];
            $this->paqueteModel->agregarPaquete($datos);
            header("Location: index.php?c=paquetes");
        }
        require_once('vista/paquetes/crearPaquete.php');
    }

    // Método para editar un paquete
    public function editar() {
        $id = $_GET['id'];
        $paquete = $this->paqueteModel->obtenerPaquetePorId($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'precio' => $_POST['precio']
            ];
            $this->paqueteModel->actualizarPaquete($id, $datos);
            header("Location: index.php?c=paquetes");
        }
        require_once('vista/paquetes/editarPaquete.php');
    }

    // Método para eliminar un paquete
    public function eliminar() {
        $id = $_GET['id'];
        $this->paqueteModel->eliminarPaquete($id);
        header("Location: index.php?c=paquetes");
    }
}
?>