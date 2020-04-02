<?php
require "logica.php";
$recinto=isset($_GET['recinto']) ? $_GET['recinto'] : $_POST['recinto'];
$promedio=isset($_GET['promedio']) ? $_GET['promedio'] : $_POST['promedio'];
$sexo=isset($_GET['sexo']) ? $_GET['sexo'] : $_POST['sexo'];

$logica=new Logica();
$array = new stdClass();
$arrayA=array($recinto,$promedio,$sexo);
$array->Estilo =$logica->adivinarEstilo($arrayA);
$json = json_encode($array);
echo $json;



?>