<?php 
     require_once 'models/base.php';

    class Usuario extends Base{

        public $nombre;
        public $contrasenia;
        public $id_empleado;

        public function __construct(){
           parent::__construct();
        }

        public function setNombre($nomre):void{
            $this->nombre=$nombre;
        }

        public function setContrasenia($contrasenia):void{
            $this->contrasenia=$contrasenia;
        }

        public function setIdEmpleado($id_empleado):void{
            $this->id_empleado=$id_empleado;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getContrasenia(){
            return $this->contrasenia;
        }

        public function getIdEmpleado(){
            return $this->id_empleado;
        }


        public function ingresar(){
            $password=password_hash($this->contrasenia,PASSWORD_DEFAULT,['cost'=>10]);
            $sql="INSERT INTO usuarios values ('$this->nombre','$password','$this->id_empleado')";
            $resultado=mysqli_query($this->db,$sql);
            return $resultado;
        }

        public function eliminar(){

            $sql="DELETE FROM usuarios WHERE id_empleado='$this->id_empleado'";
            $resultado=mysqli_query($this->db,$sql);
            return $resultado;
        }


    }

?>