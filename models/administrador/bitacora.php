<?php

    require_once 'models/base.php';

    class bitacora extends base
    {   


        public $id;
        public $tabla;
        public $asunto;
        public $descripcion;
        public $fecha;

        public function __construct() {
            parent::__construct();
        }
    }
    

?>