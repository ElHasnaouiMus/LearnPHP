<?php 

function tribonacci($signature, $n) {
  if($n==0){ 
  return []; }
  elseif($n==1){ 
  return $signature[0];}
  elseif($n==2){ 
  return array_slice($signature, 0, 2);}
  else 
  {
    for($i=3; $i<$n; $i++){
      $signature[$i] =  $signature[$i-1] + $signature[$i-2] + $signature[$i-3];
      }
  }
  return $signature;
}

print tribonacci([0.5,0.5,0.5],30);