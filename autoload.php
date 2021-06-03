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
    

    try{
        spl_autoload_register('autoCargaAdministrador');
    }catch(Exception $e){}
    
    try{
        spl_autoload_register('autoCargaAlmacen');
    }catch(Exception $e){}

    try{
        spl_autoload_register('autoCargaVendedor');
    }catch(Exception $e){}
    