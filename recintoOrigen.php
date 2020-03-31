<?php
require "manejoDatos.php";
$estilo_aprendizaje=isset($_GET['estilo_aprendizaje']) ? $_GET['estilo_aprendizaje'] : $_POST['estilo_aprendizaje'];
$promedio=isset($_GET['promedio']) ? $_GET['promedio'] : $_POST['promedio'];
$sexo=isset($_GET['sexo']) ? $_GET['sexo'] : $_POST['sexo'];
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