<h1>Clasificaciones</h1>

<?php while ($clasificacion = $tablas->fetch_object()):?>
    <p><?= $clasificacion->id ?></p>
    <a href="">X</a>
<?php endwhile; ?>