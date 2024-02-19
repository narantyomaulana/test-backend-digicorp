<?php
 function nilaiTerbesarKedua($array){

  arsort($array);
    $nilai_terbesar_kedua = null;
    $nilai_terbesar = null;
    foreach ($array as $nilai) {
      if($nilai !== $nilai_terbesar){
        $nilai_terbesar_kedua = $nilai;
        break;
      }
    }
    return $nilai_terbesar_kedua;
 }

 $nilai_array = [3, 10, 2, 8, 5];

 echo "Nilai terbesar kedua: " . nilaiTerbesarKedua($nilai_array) . "\n";


?>