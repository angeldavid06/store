<?php 
    class Web {
        public function View ($vista, $tablas) {
            return require_once 'views/'.$vista.'.php';
        }
    }
?>