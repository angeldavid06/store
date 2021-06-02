<?php 
    class Web {
        public function View ($vista, $tablas) {
            if (file_exists('views/'.$vista.'.php')) {
                return require_once 'views/'.$vista.'.php';
            } else {
                return header("Location: views/generales/404.php");
            }       
        }
    }
?>