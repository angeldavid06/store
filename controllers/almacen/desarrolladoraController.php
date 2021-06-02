<?php
    require_once 'routes/web.php';
    require_once 'models/almacen/desarrolladoras.php';

    class desarrolladoraController {
        public $model;
        public $route;

        public function __construct () {
            $this->model = new Desarrolladoras();
            $this->route = new Web();
        }

        public function mostrar(){
            $tablas = $this->model->mostrarTabla('desarrolladoras');
            $this->route->View('almacen/desarrolladoras', $tablas);
        }

        public function insertar(){
            $this->model->setNombre($_POST['nombre']);
            $this->model->setTelefono($_POST['telefono']);
            $resultado = $this->model->insertar();
            if ($resultado) {
                header("Location: http://localhost/store/?controller=desarrolladoraController&action=mostrar");                
            } else {
                echo "No me voy a tomar esos miados. Elmo dijo moka";
            }      
        }

        public function eliminar(){
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();
            if ($resultado) {
                header("Location: http://localhost/store/?controller=desarrolladoraController&action=mostrar");
            }else{
                echo "Fallo payaso";
            }
        }
    }
?>