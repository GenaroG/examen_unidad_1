<?php
class Conexion{
	public function conectar(){
			$link = new PDO("mysql:host=localhost;dbname=taw_examen_unidad_1","genaro","mysqlroot");		
		return $link;
	}
}
?>