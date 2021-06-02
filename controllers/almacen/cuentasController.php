<?php 
    require_once 'routes/web.php';
    require_once 'models/almacen/cuentas.php';

    class CuentasController {
        public $model;
        public $web;

        public function __construct () {
            $this->model = new Cuentas();
            $this->web = new Web();
        }

        public function mostrar () {
            $tablas = $this->model->mostrarTabla('cuentas_pagar');
            $this->web->View('almacen/cuentas',$tablas);
        }

        public function ingresar () {
            $this->model->setAbonado($_POST['abonado']);
            $this->model->setRestante($_POST['restante']);
            $this->model->setTotal($_POST['total']);
            $this->model->setIdDesarrolladora($_POST['desarrolladora']);
            $resultado = $this->model->ingresar();
            if ($resultado) {
                header("Location: http://localhost/store/?controller=cuentasController&action=mostrar");
            } else {
                echo 'error';
            }
        }
        
        public function eliminar () {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            if ($resultado) {
                header("Location: http://localhost/store/?controller=cuentasController&action=mostrar");
            } else {
                echo 'error';
            }
        }
    }

?>