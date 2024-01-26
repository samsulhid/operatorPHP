<?php
// no 8 - 10 itu 10 poin
$bil = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belumKompeten = array();

foreach($bil as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten : " . implode(', ', $kompeten) . "<br>";
echo "Kelompok Tidak Kompeten : " . implode(', ', $belumKompeten) . "<br>";