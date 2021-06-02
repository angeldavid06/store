<?php
    require_once 'models/base.php';

    class Clasificaciones extends Base{

        public $id;

        public function __construct() { parent::__construct(); }

        public function setId($id):void{ $this->id = $id; }

        public function getId(){ return $this->id; }

        public function ingresar(){
            $sql = "INSERT INTO clasificaciones(id) VALUES('$this->id')";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function eliminar(){
            $sql = "DELETE FROM clasificaciones WHERE id = '$this->id' ";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function actualizar(){
            $sql = "UPDATE clasificaciones SET id = '$this->id' WHERE id = '$this->id' ";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }
    }
?>