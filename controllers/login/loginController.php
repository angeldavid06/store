<?php 
    require_once 'models/login/login.php';
    require_once 'routes/web.php';

    class loginController {
        public $model;
        public $web;

        public function __construct() {
            $this->model = new Login();
            $this->web = new Web();
        }

        public function validar () {
            if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
                $this->model->setUsuario($_POST['usuario']);
                $this->model->setContrasenia($_POST['contrasenia']);
                $resultado = $this->model->validar();
                echo 'Hola '.$resultado;
                if ($resultado) {
                    header("Location: http://localhost/store/?controller=juegosController&action=mostrar");
                } else {
                    header("Location: http://localhost/store/");
                }
            }
        }
    }


?>