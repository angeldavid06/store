<h1>Tarjetas</h1>
<form action="" method="post">
    <label for="">numeros</label><input type="text" name="numeros" id="numeros">
    <label for="nombre"></label><input type="text" name="nombre" id="nombre">
    <label for="mes_vencimiento"></label><input type="text" name="mes_vencimiento" id="mes_vencimiento">
    <label for="anio_vencimiento"></label><input type="text" name="anio_vencimiento" id="anio_vencimiento">
    <label for="ccv"></label><input type="text" name="ccv" id="ccv">
    <label for="tipo"></label><input type="text" name="tipo" id="tipo">
    <?php while($tarjetas = $tablas->fetch_object()):?>
    <p><?= $tarjetas->numero?></p>
    <p><?= $tarjetas->nombre?></p>
    <p><?= $tarjetas->mes_vencimiento?><p>
    <p><?= $tarjetas->anio_vencimiento>?></p>
    <p><?= $tarjetas->ccv?></p>
    <p><?= $tarjetas->tipo?></p>
</form>
<?php endwhile;?>