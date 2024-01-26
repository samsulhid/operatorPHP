<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 81, 45, 90, 98];

$kelompokSama = [];
$kelompokBeda = [];

foreach ($bil1 as $bilangan) {
    if (in_array($bilangan, $bil2)) {
        $kelompokSama[] = $bilangan;
    } else {
        $kelompokBeda[] = $bilangan;
    }
}
foreach ($bil2 as $bilangan) {
    if (!in_array($bilangan, $bil1)) {
        $kelompokBeda[] = $bilangan;
    }
}

echo "Kelompok 1 (sama) : " . implode(', ', $kelompokSama) . "\n";
echo "Kelompok 2 (berbeda) : " . implode(', ', $kelompokBeda);
?>
 