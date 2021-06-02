<?php 
    class Conexion {
        public $con;
        public function conectar () {
            $this->conectar = mysqli_connect(
                'localhost',
                'root',
                '',
                'videojuegos'
            );
            return $this->conectar;
        }
    }
?>