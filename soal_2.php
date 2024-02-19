<?php

  class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama)
    {
      $this->nrp = $nrp;
      $this->nama = $nama;
    }
  }

  class Nilai{
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai)
    {
      $this->mapel = $mapel;
      $this->nilai = $nilai;
    }
  }

  // Generate 10 Siswa
  $siswaList = [];
  for($i = 1; $i <= 10; $i++){
    $nama = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 10);
    $siswa = new Siswa("NRP$i", $nama);


    // Generate nilai random untuk tiap siswa
    $mapelList = ['inggris', 'indonesia', 'jepang'];
    foreach ($mapelList as $mapel) {
        $nilai = rand(0,100);
        $siswa->daftarNilai[] = new Nilai($mapel, $nilai);
    }
    $siswaList[] = $siswa;

  }

  // menampilkan hasil
  foreach($siswaList as $siswa){
    echo "NRP: {$siswa->nrp}, Nama: {$siswa->nama}\n";
    echo "Daftar Nilai:\n";
    foreach($siswa->daftarNilai as $nilai){
      echo "- Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}\n";
    }

    echo "\n";
  }

?>