<?php
    require_once 'models/base.php';

    class Desarrolladoras extends Base {
        public $id;
        public $nombre;
        public $telefono;
        
        public function __construct() { parent::__construct(); }

        public function setId($id):void{ $this->id = $id; }

        public function setNombre($nombre):void{ $this->nombre = $nombre; }

        public function setTelefono($telefono):void{ $this->telefono = $telefono; }

        public function getId(){ return $this->id; }

        public function getNombre(){ return $this->nombre; }

        public function getTelefono(){ return $this->Telefono; }

        public function insertar(){
            $sql = "INSERT INTO desarrolladoras(nombre, tel) 
                    VALUES('$this->nombre','$this->telefono')";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function eliminar(){
            $sql = "DELETE FROM desarrolladoras WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function actualizar(){
            $sql = "UPDATE desarrolladoras 
                    SET nombre = '$this->nombre', tel = '$this->telefono'
                    WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
    }
    
?>