<?php 
class Paginas{
	
	public function enlacesPaginasModel($enlaces){
		if($enlaces == "proveedores" || $enlaces=="contactos"){
			$module =  "views/modules/".$enlaces.".php";
		}
		else{
			$module =  "views/modules/inicio.php";
		}
		
		return $module;
	}
}
?>