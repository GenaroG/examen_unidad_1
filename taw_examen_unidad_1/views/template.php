<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<li><a href="index.php?action=proveedores">Proveedores</a></li>
<li><a href="index.php?action=contactos">Contactos</a></li>
<?php
//ob_start();
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>
</body>
</html>
