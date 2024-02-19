<?php
function hitungKarakterTerbanyak($kata){

  $kemunculan = array_count_values(str_split(strtolower($kata)));

  arsort($kemunculan);
  $karakterTerbanyak = key($kemunculan);
  $jumlahKemunculanTerbanyak = current($kemunculan);

  // Membuat Hasil String
  $result = $karakterTerbanyak . ' ' . $jumlahKemunculanTerbanyak . 'x';

  return $result;

}

echo hitungKarakterTerbanyak('wellcome') . "\n";
echo hitungKarakterTerbanyak('strawberry') . "\n";


?>