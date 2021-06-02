<?php 
    require_once 'models/base.php';

    class Cuentas extends Base {
        public $id;
        public $monto_abonado;
        public $monto_restante;
        public $monto_total;
        public $id_desarrolladora;

        public function __construct () { parent::__construct(); }

        public function setId ($id) : void { $this->id = $id; }

        public function setAbonado ($monto_abonado) : void { $this->monto_abonado = $monto_abonado; }

        public function setRestante ($monto_restante) : void { $this->monto_restante = $monto_restante; }

        public function setTotal ($monto_total) : void { $this->monto_total = $monto_total; }

        public function setIdDesarrolladora ($id_desarrolladora) : void { $this->id_desarrolladora = $id_desarrolladora; }

        public function getId () { return $this->id; }

        public function getAbonado () { return $this->monto_abonado; }

        public function getRestante () { return $this->monto_restante; }

        public function getTotal () { return $this->monto_total; }

        public function getIdDesarrolladora () { return $this->id_desarrolladora; }

        public function ingresar () {
            $sql = "INSERT INTO cuentas_pagar(monto_abonado,monto_restante,monto_total,id_desarrolladora) VALUES (
                '$this->monto_abonado',
                '$this->monto_restante',
                '$this->monto_total',
                '$this->id_desarrolladora'
            )";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }
        
        public function eliminar () {
            $sql = "DELETE FROM cuentas_pagar WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }

        public function actualizar () {
            $sql = "UPDATE cuentas_pagar SET 
                monto_abonado = '$this->monto_abonado', 
                monto_restante = '$this->monto_restante', 
                monto_total = '$this->monto_total', 
                id_desarrolladora = '$this->id_desarrolladora' 
                WHERE id = '$this->id'";
            $resultado = mysqli_query($this->db, $sql);
            return $resultado;
        }
    }
?>