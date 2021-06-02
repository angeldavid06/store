<?php
    function autoCargaAlmacen($clase) {
        include('controllers/almacen/'.$clase.'.php');
    }

    function autoCargaAdministrador($clase) {
        include('controllers/administrador/'.$clase.'.php');
    }
    
    function autoCargaVendedor($clase) {
        include('controllers/vendedor/'.$clase.'.php');
    }

    spl_autoload_register('autoCargaAlmacen');
    spl_autoload_register('autoCargaAdministrador');
    spl_autoload_register('autoCargaVendedor');