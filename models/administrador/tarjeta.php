<?php 
    require_once 'models/base.php';
    class tarjeta extends base
    {
     public $id;
     public $numero;
     public $nombre;
     public $mes_vencimiento;
     public $anio_vencimiento;
     public $ccv;
     public $tipo;
     
     public function getId() {return $this->$id;}
     public function getNumero() {return $this->$numero;}
     public function getNombre() {return $this->$nombre;}
     public function getMes_vencimiento() {return $this->$mes_vencimiento;}
     public function getAnio_vencimiento() {return $this->$anio_vencimiento;}
     public function getCcv() {return $this->$ccv;}
     public function getTipo() {return $this->$tipo;}

     public function setId():void {return $this->id = $id;}
     public function setNumero():void {return $this->numero = $numero;}
     public function setNombre():void {return $this->nombre = $nombre;}
     public function setMes_vencimiento():void {return $this->mes_vencimiento = $mes_vencimiento;}
     public function setAnio_vencimiento():void {return $this->anio_vencimiento = $anio_vencimiento;}
     public function setCcv():void {return $this->ccv = $ccv;}
     public function setTipo():void {return $this->tipo = $tipo;}
    }

    p
    
?>