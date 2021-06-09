<?php
    require_once 'models/administrador/tarjeta.php';
    require_once 'routes/web.php';

    class tarjetaController
    {
        public $model;
        public $web;

        public function __construct()
        {
            $this->model=new tarjeta();
            $this->web= new Web();
        }

        public function mostrar()
        {
            $tablas = $this->model->mostrarTabla();
            $this->web->View('administrador/tarjeta',$tablas);
        }

        public function ingresar()
        {
            $this->model->set($_POST['']);
        }
    }
    

?>
