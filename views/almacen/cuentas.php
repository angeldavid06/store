<?php require_once 'public/components/almacen/menu.php'; ?>

<form action="http://localhost/store/?controller=cuentasController&action=ingresar" method="post">
    <label for="abonado">abonado</label>
    <input type="text" name="abonado" id="abonado">
    <label for="restante">restante</label>
    <input type="text" name="restante" id="restante">
    <label for="total">total</label>
    <input type="text" name="total" id="total">
    <label for="desarrolladora">desarrolladora</label>
    <input type="number" name="desarrolladora" id="desarrolladora">
    <button>Enviar</button>
</form>

<h1>Cuentas por pagar</h1>
<?php while ($cuenta = $tablas->fetch_object()) : ?>
    <p><?=$cuenta->monto_abonado;?></p>
    <p><?=$cuenta->monto_restante;?></p>
    <p><?=$cuenta->monto_total;?></p>
    <p><?=$cuenta->id_desarrolladora;?></p>
    <a href="http://localhost/store/?controller=cuentasController&action=eliminar&id=<?=$cuenta->id;?>">X</a>
<?php endwhile; ?>