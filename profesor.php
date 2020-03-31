<?php
require "manejoDatos.php";
$edad=isset($_GET['edad']) ? $_GET['edad'] : $_POST['edad'];
$genero=isset($_GET['genero']) ? $_GET['genero'] : $_POST['genero'];
$autoEvaluacion=isset($_GET['autoEvaluacionsexo']) ? $_GET['autoEvaluacion'] : $_POST['autoEvaluacion'];
$numeroCursoEnsenado=isset($_GET['numeroCursoEnsenado']) ? $_GET['numeroCursoEnsenado'] : $_POST['numeroCursoEnsenado'];
$areaConocimiento=isset($_GET['areaConocimiento']) ? $_GET['areaConocimiento'] : $_POST['areaConocimiento'];
$areaConocimiento=isset($_GET['habilidadComputadora']) ? $_GET['habilidadComputadora'] : $_POST['habilidadComputadora'];
$habilidadTecnologias=isset($_GET['habilidadTecnologias']) ? $_GET['habilidadTecnologias'] : $_POST['habilidadTecnologias'];
$habilidadesSitioWeb=isset($_GET['habilidadesSitioWeb']) ? $_GET['habilidadesSitioWeb'] : $_POST['habilidadesSitioWeb'];

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