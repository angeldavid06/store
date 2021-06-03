<?php 

   require_once 'models/base.php';

    class Login extends Base { 

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

        public function validar () {
            $sql = "SELECT password,id_empleado FROM usuarios WHERE nombre = '$this->usuario'";
            $resultado = mysqli_query($this->db,$sql);
            $array = mysqli_fetch_row($resultado);
            if ($array[0] != '') {
                if (password_verify($this->contrasenia,$array[0])) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
?>