<?php 
    require_once 'config/conexion.php';

    class Base extends Conexion {
        public $db;
        public function __construct() {
            $this->db = Conexion::conectar();
        }

        public function mostrarTabla($tabla){
            $sql = "SELECT * FROM $tabla";
            $mostrar = $this->db->query($sql);
            return $mostrar;
        }

        public function insert($tabla,$columnas,$valores) {
            $sql = "INSERT INTO $tabla($columnas) VALUES ($valores)";
            $insert = $this->db->query($sql);
            return $insert;
        }
    }
?>