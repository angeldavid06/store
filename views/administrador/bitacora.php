<h1>Bitacora</h1>

    <?php 
        while ($bitacora = $tablas->fetch_object()):?>
        <p><?= $bitacora->id?></p>
        <p><?= $bitacora->tabla?></p> 
        <p><?= $bitacora->descripcion?></p> 
        <p><?= $bitacora->hora_fecha?></p> 
    <?php endwhile; ?>
    
    
    
    