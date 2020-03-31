<?php
require "manejoDatos.php";
$recinto=isset($_GET['recinto']) ? $_GET['recinto'] : $_POST['recinto'];
$promedio=isset($_GET['promedio']) ? $_GET['promedio'] : $_POST['promedio'];
$sexo=isset($_GET['sexo']) ? $_GET['sexo'] : $_POST['sexo'];
$manejoDatos=new ManejoDatos();

$array = new stdClass();
$array_estilos=$manejoDatos->getEstiloSexoPromedioRecinto();


//foreach($array_estilos as $elemento){
if ($estilo_aprendizaje=='DIVERGENTE') {
  
	$array->Sexo = "Masculino";
	$json = json_encode($array);
    echo $json;
}


//}



?>