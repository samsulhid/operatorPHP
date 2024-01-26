<?php

$kehadiran = 100;
$keterangan = "sakit";

echo $hasil = ($keterangan == "sakit" || $keterangan == "izin") ? $kehadiran - 3 
        : ($keterangan == "alfa" ? $kehadiran - 5
        : $kehadiran);

        
// menggunakan boolean
// $izinSakit = 1;
// $alfa = 0;

// echo $hasil = $izinSakit ? $kehadiran -3 : ($alfa ? $kehadiran -5 : $kehadiran); 