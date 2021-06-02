<?php
    require_once 'routes/web.php';
    require_once 'models/almacen/juegos.php';

    class juegosController {
        public $model;
        public $route;

        public function __construct() {
            $this->model = new Juegos();
            $this->route = new Web();
        }

        public function mostrar () {
            $tablas = $this->model->mostrarTabla('productos');
            $this->route->View('almacen/index', $tablas);
        }

        public function registrar () { 
            $this->model->setNombre($_POST['nombre']);
            $this->model->setDescripcion($_POST['descripcion']);
            $this->model->setPrecio($_POST['precio']);
            $this->model->setCantidad($_POST['cantidad']);
            $this->model->setDesarrolladora($_POST['desarrolladora']);
            $this->model->setClasificacion($_POST['clasificacion']);
            
            $resultado = $this->model->registrar();

            if ($resultado) {
                header("Location: http://localhost/store/?controller=juegosController&action=mostrar");
            }else{
                echo "Valio";
            }
        }

        public function eliminar () {
            $this->model->setId($_GET['id']);
            $resultado = $this->model->eliminar();

            if ($resultado) {
                header("Location: http://localhost/store/?controller=juegosController&action=mostrar");
            }else{
                echo "Valio";
            }
        }
    }
?> 