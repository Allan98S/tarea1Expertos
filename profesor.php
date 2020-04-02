<?php
require "logica.php";
$edad=isset($_GET['edad']) ? $_GET['edad'] : $_POST['edad'];
$genero=isset($_GET['genero']) ? $_GET['genero'] : $_POST['genero'];
$autoEvaluacion=isset($_GET['autoEvaluacion']) ? $_GET['autoEvaluacion'] : $_POST['autoEvaluacion'];
$numeroCursoEnsenado=isset($_GET['numeroCursoEnsenado']) ? $_GET['numeroCursoEnsenado'] : $_POST['numeroCursoEnsenado'];
$areaConocimiento=isset($_GET['areaConocimiento']) ? $_GET['areaConocimiento'] : $_POST['areaConocimiento'];
$habilidadComputadora=isset($_GET['habilidadComputadora']) ? $_GET['habilidadComputadora'] : $_POST['habilidadComputadora'];
$habilidadTecnologias=isset($_GET['habilidadTecnologias']) ? $_GET['habilidadTecnologias'] : $_POST['habilidadTecnologias'];
$habilidadesSitioWeb=isset($_GET['habilidadesSitioWeb']) ? $_GET['habilidadesSitioWeb'] : $_POST['habilidadesSitioWeb'];

$logica=new Logica();
$array = new stdClass();
$arrayA=array($edad,$genero,$autoEvaluacion,$numeroCursoEnsenado,$areaConocimiento,$habilidadComputadora,$habilidadTecnologias,
$habilidadesSitioWeb);

$array->TipoProfesor =$logica->adivinarTipoProfesor($arrayA);
$json = json_encode($array);
echo $json;



?>