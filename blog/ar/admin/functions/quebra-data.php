<?php
/* @param $data_br => 99/12/9999 */

function quebraData($data_br,$return=false){
  $explode = explode('/',$data_br);
  $dia = $explode[0];
  $mes = $explode[1];
  $ano = $explode[2];

  $mes_abreviado = ['01' => 'Jan', '02' => 'Fev', '03' => 'Mar', '04' => 'Abr', '05' => 'Mai', '06' => 'Jun', '07' => 'Jul', '08' => 'Ago', '09' => 'Set', '10' => 'Out', '11' => 'Nov', '12' => 'Dez'];


  if ($return == 'dia') {
    return $dia;
  } else if($return == 'mes') {
    return $mes;
  } else if ($return == 'ano') {
    return $ano;
  } else if($return == 'dia_mes') {
    return $dia.'/'.$mes;
  } 

  else if ($return == 'mes_abreviado') {
    if (isset($mes_abreviado[$mes])) {
      return $mes_abreviado[$mes];
    } else {
      return '--';
    }
    
  }
  
  
  
  else {
    return $dia.'/'.$mes.'/'.$ano;
  }
} 

