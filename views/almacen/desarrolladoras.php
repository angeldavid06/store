<?php
    require_once 'public/components/almacen/menu.php';
?>

<form action="http://localhost/store/?controller=desarrolladoraController&action=insertar" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono">

    <button>Enviar</button>
    <button>Cancelar</button>
</form>

<h1>Desarrolladoras</h1>
<?php while ($desarrolladora = $tablas->fetch_object()):?>
<h2><?=$desarrolladora->nombre;?></h2>
<h2><?=$desarrolladora->tel;?></h2>
<a href="http://localhost/store/?controller=desarrolladoraController&action=eliminar&id=<?=$desarrolladora->id;?>">X</a>
<?php endwhile;?>