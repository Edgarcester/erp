<?php 

require_once("conexion.php");

class Remplazo extends Conexion{

	public function alta($fecha,$IDCliente,$Total ,$tipo_pago){
		$this->sentencia = "INSERT INTO remplazo VALUES (null,null,'$fecha','$costo','$descripcion')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM remplazo";
		return $this->obtenerSentencia();
	}
}

 ?>