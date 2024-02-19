<?php
 function rambuLaluLintas(){
  static $status = 0;

  $colors = ['merah', 'kuning', 'hijau'];

  $nilai = $colors[$status];

  $status = ($status + 1) % count($colors);

  return $nilai;

 } 
 
 for($i= 0; $i < 10; $i++){
    echo rambuLaluLintas() . "\n";
 }

?>