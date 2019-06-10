<h1>Proveedores</h1>

<?php 
$proveedores = new MvcController();
$proveedores->agregarProveedorController();

?>


<form method="POST">
	<label>Nombre</label>
	<input type="text" name="nombre"><br>

	<label>RFC</label>
	<input type="text" name="rfc"><br>

	<label>Dirección</label>
	<input type="text" name="direccion"><br>

	<label>Email</label>
	<input type="email" name="email"><br>

	<button type="submit" name="agregar_proveedor">Guardar</button>
</form>