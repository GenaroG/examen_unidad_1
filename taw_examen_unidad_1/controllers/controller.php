<?php
class MvcController{

	public function pagina(){
		include "views/template.php";
	}

	public function enlacesPaginasController(){
		if(isset( $_GET['action']))		
			$enlaces = $_GET['action'];
		else
			$enlaces = "index";
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}

	// Agregar contacto.
	public function agregarContactoController(){
		if (isset($_POST["agregar_contacto"])) {

			$datosController = array( "nombre"=>$_POST["nombre"], 
								      "apellidos"=>$_POST["apellidos"],
								      "email"=>$_POST["email"],
								      "tel"=>$_POST["tel"],
								      "cve"=>$_POST["cve"]								      
								  );
			$respuesta = Datos::agregarContactoModel($datosController);

			echo $respuesta."<br>";
		}
	}

	//Agregar proveedor.
	public function agregarProveedorController(){
		if (isset($_POST["agregar_proveedor"])) {
			echo "Se va a agregar un proveedor...<br>";
			$datosController = array( "nombre"=>$_POST["nombre"], 
								      "rfc"=>$_POST["rfc"],
								      "direccion"=>$_POST["direccion"],
								      "email"=>$_POST["email"]								      								     
								  );
			$respuesta = Datos::agregarProveedorModel($datosController);

			echo $respuesta."<br>";
		}
	}


}
?>