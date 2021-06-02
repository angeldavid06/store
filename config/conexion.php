<?php 
    class Conexion {
        public $con;
        public function conectar () {
            $this->conectar = mysqli_connect(
                'localhost',
                'root',
                '',
                'db_videojuegos'
            );
            return $this->conectar;
        }
    }
?>