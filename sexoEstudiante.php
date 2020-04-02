<?php
require "logica.php";
$estilo_aprendizaje=isset($_GET['estilo_aprendizaje']) ? $_GET['estilo_aprendizaje'] : $_POST['estilo_aprendizaje'];
$promedio=isset($_GET['promedio']) ? $_GET['promedio'] : $_POST['promedio'];
$recinto=isset($_GET['recinto']) ? $_GET['recinto'] : $_POST['recinto'];

$logica=new Logica();
$array = new stdClass();
$arrayA=array($estilo_aprendizaje,$promedio,$recinto);
$array->Sexo =$logica->adivinarSexo($arrayA);
$json = json_encode($array);
echo $json;





?>