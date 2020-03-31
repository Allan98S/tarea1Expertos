<?php
require "manejoDatos.php";
$confiabilidad=isset($_GET['confiabilidad']) ? $_GET['confiabilidad'] : $_POST['confiabilidad'];
$capacidad=isset($_GET['capacidad']) ? $_GET['capacidad'] : $_POST['capacidad'];
$costo=isset($_GET['costo']) ? $_GET['costo'] : $_POST['costo'];
$manejoDatos=new ManejoDatos();

$array = new stdClass();
$array_estilos=$manejoDatos->getEstiloSexoPromedioRecinto();


//foreach($array_estilos as $elemento){
if ($estilo_aprendizaje=='DIVERGENTE') {
  
	$array->Recinto = "Paraiso";
	$json = json_encode($array);
    echo $json;
}


//}



?>