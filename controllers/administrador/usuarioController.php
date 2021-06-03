<?php 
     require_once 'models/administrador/usuario.php';
     require_once 'routes/web.php';

     class usuarioController{
            public $model;
            public $web;
    
           public function __construct(){
            $this->model= new Usuario();
            $this->web= new Web();
           }

           public function mostrar(){
                $tablas= $this->model->mostrarTabla('usuarios');
                $this->web->View('administrador/usuario',$tablas);
           }

           public function ingresar(){
               $this->model->setNombre($_POST['usuario']);
               $this->model->setContrasenia($_POST['contrasenia']);
               $this->model->setIdEmpleado(1);
               $resultado = $this->model->ingresar();
               if ($resultado) {
                   header("Location: http://localhost/store/");
               } else {
                   echo 'Error';
               }
           }

           public function eliminar(){

            
           }

        

     }
?>