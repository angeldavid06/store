

<?php 
    require_once 'models/administrador/bitacora.php';
    require_once 'routes/web.php';
    class bitacoraController
    {
        public $model;
        public $web;
        public function __construct()
        {
            $this->model = new bitacora();
            $this->web = new Web();
        }

        public function mostrar()
        {
            $tabla = $this->model->mostrarTabla('bitacora');
            $this->web->View('administrador/bitacora',$tabla);
        }
       

    }
    


?>