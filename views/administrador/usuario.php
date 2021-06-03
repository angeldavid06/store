<h1>Usuarios</h1>
<form action="http://localhost/store/?controller=usuarioController&action=ingresar" method="post">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">
    <label for="contrasenia">Contraseña</label>
    <input type="password" name="contrasenia" id="contrasenia">
    <button>Ingresar</button>
</form>
<?php while($usuario=$tablas->fetch_object()): ?>
<p><?=$usuario->nombre?></p>
<?php endwhile; ?>