<?php require_once 'public/components/almacen/menu.php'; ?>
<h1>Juegos</h1>

<form action="http://localhost/store/?controller=juegosController&action=registrar" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio">
    <label for="cantidad">Cantidadcantidad</label>
    <input type="text" name="cantidad" id="cantidad">
    <label for="desarrolladora">Desarrolladora</label>
    <input type="number" name="desarrolladora" id="desarrolladora">
    <label for="clasificacion">Clasificacion</label>
    <input type="text" name="clasificacion" id="clasificacion">
    <button>Enviar</button>
    <button>Cancelar</button>
</form>

<?php while($producto = $tablas->fetch_object()):?>
<tr>
    <td><?=$producto->nombre?></td>
    <td><?=$producto->descripcion?></td>
    <td><?=$producto->precio?></td>
    <td><a href="http://localhost/store/?controller=juegosController&action=eliminar&id=<?=$producto->id?>">X</a></td>
</tr>
<?php endwhile;?> 