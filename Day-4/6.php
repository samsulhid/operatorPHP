<?php

$bilangan = 225;
$kelipatanAwal = 5;
$kelipatanAkhir = 25;
$kemungkinan = 0;
$angkaBisaBagiHabis = [];

for ($i = $kelipatanAwal; $i <= $kelipatanAkhir; $i += 5) {
    if ($bilangan % $i == 0) {
        $kemungkinan++;
        $angkaBisaBagiHabis[] = $i;
    }
}

echo "Bilangan $bilangan bisa dibagi habis dengan bilangan: $kemungkinan kali, yaitu " 
    . implode(', ', $angkaBisaBagiHabis);
?>