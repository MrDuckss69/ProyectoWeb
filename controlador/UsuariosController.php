<?php
require_once('modelo/UsuariosModel.php');
class UsuariosController{
    private $usuariosModel;
    public function __construct(){
        $this->usuariosModel = new UsuariosModel();
    }
    public static function registro(){
        require_once('vista/usuarios/registro.php');
    }
    public static function login(){
        require_once('vista/usuarios/login.php');
    }
}