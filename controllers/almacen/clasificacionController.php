<?php
    require_once 'models/almacen/clasificaciones.php';
    require_once 'routes/web.php';

    class clasificacionController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Clasificaciones();
            $this->web = new Web();
        }

        public function mostrar() {
            $tablas =  $this->model->mostrarTabla('clasificaciones');
            $this->web->View('almacen/clasificaciones',$tablas);
        }
    }
?>