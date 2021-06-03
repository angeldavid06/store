<?php
    require_once 'models/base.php';

    class Empleados extends Base{
        public $id;
        public $nombre;
        public $a_paterno;
        public $a_materno;
        public $curp;
        public $id_rol;

        public function __construct() {
            parent::__construct();
        }

        public function setId($id):void{ $this->id = $id; }

        public function setNombre($nombre):void{ $this->nombre = $nombre; }
        
        public function setAPaterno($a_paterno):void{ $this->a_paterno = $a_paterno; }
        
        public function setAMaterno($a_materno):void{ $this->a_materno = $a_materno; }
        
        public function setCurp($curp):void{ $this->curp = $curp; }
        
        public function setIdRol($id_rol):void{ $this->id_rol = $id_rol; }

        public function getId(){ return $this->id; }

        public function getNombre(){ return $this->nombre; }

        public function getAPaterno(){ return $this->a_paterno; }
        
        public function getAMaterno(){ return $this->a_materno; }
        
        public function getCurp(){ return $this->curp; }
        
        public function getIdRol(){ return $this->id_rol; }

        public function ingresar(){
            $sql = "INSERT INTO empleados(nombre, a_paterno, a_materno, curp, id_rol)
                    VALUES('$this->nombre','$this->a_paterno','$this->a_materno','$this->curp','$this->id_rol')";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function eliminar(){
            $sql = "DELETE FROM empleados WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function actualizar(){
            $sql = "UPDATE empleados 
                    SET nombre = '$this->nombre', a_paterno = '$this->a_paterno', a_materno = '$this->a_materno', curp = '$this->curp', id_rol = '$this->rol'
                    WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }
    }
    
?>