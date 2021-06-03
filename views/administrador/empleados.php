<h1>Empleados</h1>

<?php while ($empleados = $tablas->fetch_object()):?>
    <p><?=$empleados->nombre?></p>
    <p><?=$empleados->a_paterno?></p>
    <p><?=$empleados->a_materno?></p>
    <p><?=$empleados->curp?></p>
    <p><?=$empleados->id_rol?></p>
<?php endwhile;?>