<?php

$harga_menu = [
    'Nasi Goreng' => 15000,
    'Ayam Bakar' => 20000,
    'Nasi Kebuli' => 25000,
    'Jus' => 8000,
    'Teh Manis' => 3000,
    'Es Jeruk' => 5000
];

$pesanan = [
    'Nasi Kebuli' => 2,
    'Ayam Bakar' => 1,
    'Nasi Goreng' => 2
];

$hari_ini = date('l'); 

$diskon = 0;

if ($hari_ini == 'Monday') { 
    $diskon = 0.02;
} elseif ($hari_ini == 'Friday') { 
    $diskon = 0.05;
}

$total_sebelum_diskon = 0;

foreach ($pesanan as $menu => $jumlah) {
    if (isset($harga_menu[$menu])) {
        $total_sebelum_diskon += $harga_menu[$menu] * $jumlah;
    }
}

$total_setelah_diskon = $total_sebelum_diskon * (1 - $diskon);

echo "Hari ini adalah hari {$hari_ini}<br>";
echo "Pesanan Dani:<br>";
foreach ($pesanan as $menu => $jumlah) {
    echo "- {$menu} ({$jumlah} porsi)<br>";
}
echo "Total harga sebelum diskon: Rp. " . number_format($total_sebelum_diskon, 2) . "<br>";
echo "Diskon yang diterapkan: " . ($diskon * 100) . "%<br>";
echo "Total harga setelah diskon: Rp. " . number_format($total_setelah_diskon, 2);
?>
