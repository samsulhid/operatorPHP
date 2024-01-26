<?php
// 3 poin
$tabungan = 850000;
$bunga = 0.05;

$tabunganAkhir = $tabungan > 500000 ? $tabungan + ($tabungan * $bunga) : $tabungan;

echo "Saldo tabungan Andi menjadi " . number_format($tabunganAkhir, 2, ',', '.');
?>
