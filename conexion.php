<?php


class Conexion{
	
	protected $conexion_db;
	
	public function Conexion(){

		
		try{
			$this->conexion_db=new PDO('mysql:host=localhost; dbname=expertos_bd','root','admin');
			$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conexion_db->exec("SET CHARACTER SET utf8");
			return $this->conexion_db;
			
		}catch(Exception $e){
			echo "La linea de error es: ". $e->getLine();
		}
	}
	

	
	
}



?>