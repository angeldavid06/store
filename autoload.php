<?php
    function autoCargaLogin($clase) {
        if (file_exists('controllers/login/'.$clase.'.php')) {
            include('controllers/login/'.$clase.'.php');
        } else {
            return false;
        }
    }

    function autoCargaAlmacen($clase) {
        if (file_exists('controllers/almacen/'.$clase.'.php')) {
            include('controllers/almacen/'.$clase.'.php');
        } else {
            return false;
        }
    }

    function autoCargaAdministrador($clase) {
        if (file_exists('controllers/administrador/'.$clase.'.php')) {
            include('controllers/administrador/'.$clase.'.php');
        } else {
            return false;
        }
    }
    
    function autoCargaVendedor($clase) {
        if (file_exists('controllers/vendedor/'.$clase.'.php')) {
            include('controllers/vendedor/'.$clase.'.php');
        } else {
            return false;
        }
    }

    spl_autoload_register('autoCargaLogin');
    spl_autoload_register('autoCargaAdministrador');
    spl_autoload_register('autoCargaAlmacen');
    spl_autoload_register('autoCargaVendedor');
    
    