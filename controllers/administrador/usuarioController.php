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
               //$this->model->set


           }

           public function eliminar(){

            
           }

        

     }
?>