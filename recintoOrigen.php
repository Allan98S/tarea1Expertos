<?php
require "logica.php";
$estilo_aprendizaje=isset($_GET['estilo_aprendizaje']) ? $_GET['estilo_aprendizaje'] : $_POST['estilo_aprendizaje'];
$promedio=isset($_GET['promedio']) ? $_GET['promedio'] : $_POST['promedio'];
$sexo=isset($_GET['sexo']) ? $_GET['sexo'] : $_POST['sexo'];


$logica=new Logica();
$array = new stdClass();
$arrayA=array($estilo_aprendizaje,$promedio,$sexo);
$array->Recinto =$logica->adivinarRecinto($arrayA);
$json = json_encode($array);
echo $json;





?>