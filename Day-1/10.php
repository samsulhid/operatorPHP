<?php

$hargaBelanja = 154000;
$diskonPersen = 7 / 100;

if ($hargaBelanja >= 100000) {
    $diskon = $hargaBelanja * $diskonPersen;
    $totalBayar = $hargaBelanja - $diskon;
    
    echo "Anda mendapatkan diskon 7%!<br>";
    echo "Jumlah yang harus dibayarkan oleh Andi adalah Rp. " . number_format($totalBayar, 0, ',', '.');
} else {
    echo "Anda tidak mendapatkan diskon.<br>";
    echo "Jumlah yang harus dibayarkan oleh Andi adalah Rp. " . number_format($hargaBelanja, 0, ',', '.');
}