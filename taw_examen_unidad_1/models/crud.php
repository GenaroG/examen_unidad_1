<?php

require_once "conexion.php";
class Datos extends Conexion{

	/*public function agregarContactoModel($datos){
		$stmt1 = Conexion::conectar()->prepare("INSERT INTO contacto (nombre, apellidos, email, tel, cve) VALUES (:nombre,:apellidos,:email,:tel,:cve)");	
		
		$stmt1->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt1->bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
		$stmt1->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt1->bindParam(":tel", $datosModel["tel"], PDO::PARAM_STR);
		$stmt1->bindParam(":cve", $datosModel["cve"], PDO::PARAM_INT);		
		if($stmt1->execute()){
			return "success";
		} else {
			return "failed";
		}

		$stmt->close();
	}*/

	public function agregarProveedorModel($datos){
		echo "Preparando sentencia.<br>";
		echo "Datos: ".$datos["nombre"]."<br>";
		echo "Datos: ".$datos["rfc"]."<br>";
		echo "Datos: ".$datos["direccion"]."<br>";
		echo "Datos: ".$datos["email"]."<br>";

		echo 'INSERT INTO proveedores (nombre, rfc, direccion, email) VALUES ("'.$datos["nombre"].'","'.$datos["rfc"].'","'.$datos["direccion"].'","'.$datos["email"].'")<br>';

		$stmt = Conexion::conectar()->prepare('INSERT INTO proveedores (nombre, rfc, direccion, email) VALUES ('.$datos["nombre"].','.$datos["rfc"].','.$datos["direccion"].','.$datos["email"].')');

		echo "Ejecutando sentencia.<br>";

		if($stmt->execute()){			
			return "success";
		} else {
			return "failed";
		}

		$stmt->close();

	}

	/*public function ingresoMaestroModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT email, password, num_empleado, nivel FROM $tabla WHERE email = :email");	
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	public function vistaMaestrosModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT m.num_empleado as num_empleado, m.nombre as nombre, m.email as email, c.nombre as nombre_carrera, m.nivel as nivel FROM $tabla as m inner join carrera as c on m.id_carrera=c.id");	
		$stmt->execute();
 
		return $stmt->fetchAll();
		$stmt->close();
	}*/

}
?>