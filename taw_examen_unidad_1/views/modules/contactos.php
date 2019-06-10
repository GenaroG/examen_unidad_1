<h1>Contactos</h1>

<?php 
$contactos = new MvcController();
$contactos->agregarContactoController();

?>

<form method="POST">
	<label>Nombre</label>
	<input type="text" name="nombre"><br>

	<label>Apellido</label>
	<input type="text" name="apellidos"><br>

	<label>Email</label>
	<input type="email" name="email"><br>

	<label>Télefono</label>
	<input type="text" name="tel"><br>

	<label>Clave del proveedor</label>
	<input type="text" name="cve"><br>

	<button type="submit" name="agregar_contacto">Guardar</button>
</form>