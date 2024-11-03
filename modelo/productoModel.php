<?php
class ProductoModel {
    private $listaProductos;
    public function __construct(){
        $this->listaProductos=array();
    }
    public function mostrarProductos(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Productos;";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaProductos[]=$filas;
        }
        return $this->listaProductos;
    }
}
?>