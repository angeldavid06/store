<?php 

   require_once 'models/base.php';

    class Login extends Base{ 

        public $usario;
        public $contrasenia;

        public function __construct(){
             parent::__construct();
        }

        public function setUsuario($usuario):void{
            $this->usuario=$usuario;
        }

        public function setContrasenia($contrasenia):void{
            $this->contrasenia=$contrasenia;
        }

        public function getUsuario(){
           return $this->usuario;
        }

        public function getContrasenia(){
            return $this->contrasenia;
        }

        



       



    }
?>