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
        return 1/(1+sqrt((float) $distancia));
    }

    function calcularEstiloAprendizaje($array_A) {
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
    function adivinarRecinto($array_A){
        $datos=new ManejoDatos();
        $arrayBD =$datos->getEstiloSexoPromedioRecinto();
        if($array_A[0]=='DIVERGENTE'){
            $estilo=4;
        }
        if($array_A[0]=='CONVERGENTE'){
            $estilo=3;
        }
        if($array_A[0]=='ACOMODADOR'){
            $estilo=2;
        }
        if($array_A[0]=='ASIMILADOR'){
            $estilo=1;
        }
        $arrayA = array( $estilo, $array_A[1],($array_A[2] == "Masculino" ? 1 : 2));
        foreach ($arrayBD as $elemento) {
            if($elemento['Estilo']=='DIVERGENTE'){
                $estiloBD=4;
            }
            if($elemento['Estilo']=='CONVERGENTE'){
                $estiloBD=3;
            }
            if($elemento['Estilo']=='ACOMODADOR'){
                $estiloBD=2;
            }
            if($elemento['Estilo']=='ASIMILADOR'){
                $estiloBD=1;
            }
         $arrayB = array($estiloBD, $elemento['Promedio'], $elemento['Sexo'] == "M" ? 1 : 2);
         $temporal = $this->distanciaEuclidiana($arrayA, $arrayB);
          if ($temporal > $this->distancia) {
              $this->distancia = $temporal;
              $this->temporal = $elemento['Recinto'];
            }
        }
        return $this->temporal;
    }

    function adivinarSexo($array_A){
        $datos=new ManejoDatos();
        $arrayBD =$datos->getEstiloSexoPromedioRecinto();
        if($array_A[0]=='DIVERGENTE'){
            $estilo=4;
        }
        if($array_A[0]=='CONVERGENTE'){
            $estilo=3;
        }
        if($array_A[0]=='ACOMODADOR'){
            $estilo=2;
        }
        if($array_A[0]=='ASIMILADOR'){
            $estilo=1;
        }
        $arrayA = array( $estilo, $array_A[1],($array_A[2] == "Paraiso" ? 1 : 2));
        foreach ($arrayBD as $elemento) {
            if($elemento['Estilo']=='DIVERGENTE'){
                $estiloBD=4;
            }
            if($elemento['Estilo']=='CONVERGENTE'){
                $estiloBD=3;
            }
            if($elemento['Estilo']=='ACOMODADOR'){
                $estiloBD=2;
            }
            if($elemento['Estilo']=='ASIMILADOR'){
                $estiloBD=1;
            }
         $arrayB = array($estiloBD, $elemento['Promedio'], $elemento['Recinto'] == "Paraiso" ? 1 : 2);
         $temporal = $this->distanciaEuclidiana($arrayA, $arrayB);
          if ($temporal > $this->distancia) {
              $this->distancia = $temporal;
              $this->temporal = $elemento['Sexo'];
            }
        }
        if($this->temporal=='M'){
        $this->temporal="Masculino";
        return $this->temporal;
        }
        if($this->temporal=='F'){
            $this->temporal="Femenino";
            return $this->temporal;
            }
    }
    function adivinarEstilo($array_A){
        $datos=new ManejoDatos();
        $arrayBD =$datos->getEstiloSexoPromedioRecinto();
  
        $arrayA = array($array_A[2] == "Masculino" ? 1 : 2, $array_A[1],($array_A[0] == "Paraiso" ?  1 : 2)); 
      
        foreach ($arrayBD as $elemento) {
            
         $arrayB = array($elemento['Sexo'] == "M" ? 1 : 2, $elemento['Promedio'], $elemento['Recinto'] == "Paraiso" ? 1 : 2);
         $temporal = $this->distanciaEuclidiana($arrayA, $arrayB);
          if ($temporal > $this->distancia) {
              $this->distancia = $temporal;
              $this->temporal = $elemento['Estilo'];
            }
        }
      
        return $this->temporal;
        
    }

    function transformarDatosProfesor($array_A){
       
       if($array_A[1]=='M'){
           $genero=1;
       }
        if($array_A[1]=='F'){
           $genero=2;
       }
       if($array_A[1]=='NA'){
        $genero=3;
       }
       if($array_A[2]=='B'){
          $autoEvaluacion=1;
       }
       if($array_A[2]=='I'){
        $autoEvaluacion=2;
     }
     if($array_A[2]=='A'){
        $autoEvaluacion=3;
     }
     if($array_A[4]=='DM'){
         $areaConocimiento=1;
     }
     if($array_A[4]=='ND'){
        $areaConocimiento=2;
    }
    if($array_A[4]=='O'){
        $areaConocimiento=3;
    }
    if($array_A[5]=='L'){
        $habilidadComputadora=1;
    }
    if($array_A[5]=='A'){
        $habilidadComputadora=2;
    }
    if($array_A[5]=='H'){
        $habilidadComputadora=3;
    }
    if($array_A[6]=='N'){
        $habilidadTeconlogias=1;
    }
    if($array_A[6]=='S'){
        $habilidadTeconlogias=2;
    }
    if($array_A[6]=='O'){
        $habilidadTeconlogias=3;
    }
    if($array_A[7]=='N'){
        $habilidadSitioWeb=1; 
    }
    if($array_A[7]=='S'){
        $habilidadSitioWeb=2;
    }
    if($array_A[7]=='O'){
        $habilidadSitioWeb=3;
    }
  return  array($array_A[0],$genero,$autoEvaluacion,$array_A[3],$areaConocimiento,$habilidadComputadora,
  $habilidadTeconlogias,$habilidadSitioWeb);
}

function transformarDatosRed($array_A){
       
    if($array_A[0]=='2'){
        $confiabilidad=1;
    }
     if($array_A[0]=='3'){
        $confiabilidad=2;
    }
    if($array_A[0]=='4'){
     $confiabilidad=3;
    }
    if($array_A[0]=='5'){
       $confiabilidad=5;
    }
    if($array_A[1]=='Low'){
     $capacidad=2;
  }
  if($array_A[1]=='Medium'){
     $capacidad=3;
  }
  if($array_A[1]=='High'){
      $capacidad=1;
  }
  if($array_A[2]=='Low'){
    $costo=2;
 }
 if($array_A[2]=='Medium'){
    $costo=3;
 }
 if($array_A[2]=='High'){
     $costo=1;
 }
return  array($confiabilidad,$capacidad,$costo,$array_A[3]);
}

    function adivinarTipoProfesor($array_A){
    $arrayA = $this->transformarDatosProfesor($array_A);
    $datos=new ManejoDatos();
    $array = new stdClass();
    $array_profesores=$datos->getProfesores();
    foreach ($array_profesores as $elemento) {
        $elemento = array($elemento['A'], $elemento['B'], $elemento['C'], $elemento['D'],$elemento['E'],
        $elemento['F'],$elemento['G'],$elemento['H'],$elemento['Class']);
        $arrayB=$this->transformarDatosProfesor($elemento);
        $temporal = $this->distanciaEuclidiana($arrayA, $arrayB);
        if ($temporal > $this->distancia) {
            $this->distancia = $temporal;
            $this->temporal = $elemento['8'];
        }
    }
    return $this->temporal;
    
    }

    public function adivinarClasificacionRed($array_A){
    $arrayA = $this->transformarDatosRed($array_A);
    $datos=new ManejoDatos();
    $array = new stdClass();
    $array_redes=$datos->getRedes();
    foreach ($array_redes as $elemento) {
        $elemento = array( $elemento['Reliability (R)'],$elemento['Capacity (Ca)'],$elemento['Costo (Co)'],
        $elemento['Id'],$elemento['Number of links (L)'], $elemento['Class']);
        $arrayB=$this->transformarDatosRed($elemento);
        $temporal = $this->distanciaEuclidiana($arrayA, $arrayB);
        if ($temporal > $this->distancia) {
            $this->distancia = $temporal;
            $this->temporal = $elemento['5'];
        }
    }
    return $this->temporal;
    }
  
}

?>