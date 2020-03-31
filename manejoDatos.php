<?php
require("conexion.php");

class ManejoDatos extends Conexion{
	
	public function ManejoDatos(){
		
		parent::__construct(); //ejecuta el constructor de la clase padre
		
	}
	
public function getEstiloSexoPromedioRecinto(){
   $sql="Select * from estilosexopromediorecinto";
    $sentencia=$this->conexion_db->prepare($sql);
    $sentencia->execute(array());
	$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
	$sentencia->closeCursor();
	return $resultado;
	$this->conexion_db=null;
}
}

?>