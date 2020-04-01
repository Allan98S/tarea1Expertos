<?php
require "manejoDatos.php";
class Logica    {
    public $distancia;
    public $temporal;
    function __construct() {
 
 }

    function distanciaEuclidiana($arrayA, $arrayB) {
        if (count($arrayA) !== count($arrayB)) {
            return NULL;
        }
        $distancia = 0;
        $length = count($arrayA);

        for ($i = 0; $i < $length; $i++) {
            $distancia += pow(($arrayA[$i] - $arrayB[$i]),2);
        }
        return sqrt((float) $distancia);
    }

    function calcLearningStyles($array_A) {
        $datos=new ManejoDatos();
        $array = new stdClass();
        $array_estilos=$datos->getRecintosEstilo();
        foreach ($array_estilos as $elemento) {
            $arrayB = array($elemento['CA'], $elemento['EC'], $elemento['EA'], $elemento['OR']);
            $temporal = $this->distanciaEuclidiana($array_A, $arrayB);
            if ($temporal > $this->distancia) {
                $this->distancia = $temporal;
                $this->temporal = $elemento['Estilo'];
            }
        }
        return $this->temporal;
        }
}

?>