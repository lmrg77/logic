<?php 
function calcular_comision($meta, $ventas){
  if($ventas <= $meta){
    $val1 = $meta - $ventas;
    $val2 = ($meta - $val1)/100;
    $comision = $meta * $val2;
  }
  if($ventas > $meta){
    $val1 = ($meta - $ventas)*-1;
    $val2 = $val1/100;
    $val3 = $val2 * 10;
    $val4 = floor($val3);
    $val5 = $val4 / 100;
    $val6 = $meta * $val5;
    $comision = $meta + $val6;
  }
  
}

echo(calcular_comision(100,70));
?>