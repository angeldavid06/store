<?php
    require_once 'models/administrador/empleados.php';
    require_once 'routes/web.php';

    class empleadosController{
        public $tablas;
        public $web;

        public function __construct() {
            $this->tablas = new Empleados();
            $this->web = new Web();
        }

        public function mostrar(){
            $tablas = $this->tablas->mostrarTabla('empleados');
            $this->web->View('administrador/empleados',$tablas);
        }
    }
    
?>