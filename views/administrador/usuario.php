<h1>Usuarios</h1>
<?php while($usuario=$tablas->fetch_object()): ?>
<p><?=$usuario->nombre?></p>

<?php endwhile; ?>