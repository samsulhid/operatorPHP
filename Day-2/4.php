<?php

$jam_mulaiKerja = 8;
$jam_pulang = 22; 
$upah_lembur = 30000; 

$total_jamKerja = $jam_pulang - $jam_mulaiKerja;

$jam_Lembur = $total_jamKerja - 8; 
if ($jam_Lembur > 0) {
    $kompensasi = $jam_Lembur * $upah_lembur;
} else {
    $kompensasi = 0;
}

echo "Kompensasi yang akan diterima oleh Dani: Rp. " . number_format($kompensasi, 0, ',', '.');
?>
