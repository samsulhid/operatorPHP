<?php
$data = [
    ['nama' => 'andi', 'tahun' => '2008'],
    ['nama' => 'beni', 'tahun' => '2001'],
    ['nama' => 'dani', 'tahun' => '2004'],
    ['nama' => 'eko', 'tahun' => '2006']
];

foreach ($data as $person) {
    $tahun = intval($person['tahun']); 
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "Nama: " . $person['nama'] . ", Tahun Lahir: " . $person['tahun'] . 
        " (Tahun Kabisat)\n";
    } 
}
?>
