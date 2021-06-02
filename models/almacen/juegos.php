<?php 
    require_once 'models/base.php';

    class Juegos extends Base {
        public $id;
        public $nombre;
        public $descripcion;
        public $precio;
        public $cantidad; 
        public $id_desarrolladora;
        public $id_clasificacion;

        public function __construct() { parent::__construct(); }

        public function getId () { return $this->id; }

        public function getNombre () { return $this->nombre; }

        public function getDescripcion () { return $this->descripcion; }

        public function getPrecio () { return $this->precio; }

        public function getDesarrolladora () { return $this->id_desarrolladora; }

        public function getClasificacion () { return $this->id_clasificacion; }

        public function getCantidad () { return $this->cantidad; }

        public function setId ($id) : void { $this->id = $id; }

        public function setNombre ($nombre) : void { $this->nombre = $nombre; }
        
        public function setDescripcion ($descripcion) : void { $this->descripcion = $descripcion; }
        
        public function setPrecio ($precio) : void { $this->precio = $precio; }
        
        public function setDesarrolladora ($id_desarrolladora) : void { $this->id_desarrolladora = $id_desarrolladora; }
        
        public function setClasificacion ($id_clasificacion) : void { $this->id_clasificacion = $id_clasificacion; }
        
        public function setCantidad ($cantidad) : void { $this->cantidad = $cantidad; }

        public function registrar () {
            $sql = "INSERT INTO productos(nombre,descripcion,precio,cantidad,id_desarrolladora,clasificacion) VALUES (
                '$this->nombre',
                '$this->descripcion',
                '$this->precio',
                '$this->cantidad',
                '$this->id_desarrolladora',
                '$this->id_clasificacion'
            )";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }
        
        public function eliminar(){
            $sql = "DELETE FROM productos WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db,$sql);
            return $resultado;
        }

        public function actualizar(){
            $sql = "UPDATE productos SET 
            nombre = '$this->nombre',
            descripcion = '$this->descripcion',
            precio = '$this->precio',
            cantidad = '$this->cantidad',
            id_desarrolladora = '$this->id_desarrolladora',
            clasificacion = '$this->id_clasificacion'
            WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
        }
    }
?>