<?php

include_once "Mahasiswa.php";

class MahasiswaD3 extends Mahasiswa{
    public function mengerjakanTA(): void {
      echo "Mengerjakan laporan Tugas Akhir";
   }
    public function ujian(): void {
      echo "Melakukan sidang Tugas Akhir";
   }
    public function melihatNilai(): void {
      echo "Mahasiswa melihat nilai";
   }
}

$mahasiswaD3 = new MahasiswaD3();
$mahasiswaD3->mengerjakanTA();
echo "<br>";
$mahasiswaD3->ujian();
echo "<br>";
$mahasiswaD3->melihatNilai();
