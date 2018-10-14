<?php

    //Funciones para calcular area de figuras geometricas

  function AreaTriangulo($b, $h){
    $resultado = ($b * $h) / 2;
    return $resultado;
  }
  function AreaCuadrado($l){
    $resultado =  pow($l,2);
    return $resultado;
  }
  function AreaRectangulo($b, $h){
    $resultado = $b * $h;
    return $resultado;
  }
  function AreaRombo($Dmayor, $Dmenor){
    $resultado = ($Dmayor * $Dmenor) / 2;
    return $resultado;
  }
  function AreaRomboide($b, $h){
    $resultado = $b * $h;
    return $resultado;
  }
  function AreaTrapecio($BaseMayor, $BaseMenor, $h){
    $resultado = (($BaseMayor + $BaseMenor) *$h) / 2;
    return $resultado;
  }
  function AreaPentagono($Perimetro, $Apotema, $Lado){
    $resultado = ($Perimetro * $Apotema) / 2;
    return $resultado;
  }
  function AreaHexagono($Perimetro, $Apotema, $Lado){
    $resultado = ($Perimetro * $Apotema) / 2;
    return $resultado;
  }
  function AreaCirculo($r){
    $resultado = pow((pi()*$r),2);
    return $resultado;
  }
  function AreaElipse($SemiejeMayor, $SemiejeMenor){
    $resultado = (pi()*$SemiejeMayor* $SemiejeMenor);
    return $resultado;
  }
