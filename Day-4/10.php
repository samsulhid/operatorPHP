<?php
$barang = [
    [
        'nama' => 'pasta gigi',
        'harga' => '18000',
        'jumlah' => '1',
    ],
    [
        'nama' => 'sabun mandi',
        'harga' => '5000',
        'jumlah' => '3',
    ],
    [
        'nama' => 'aloe vera sheet mask',
        'harga' => '15000',
        'jumlah' => '5',
    ],
];

$totalBayar = 0;

foreach ($barang as $bayar) {
    $harga = $bayar['harga'];
    $jumlah = $bayar['jumlah'];
    $totalBayar += $harga * $jumlah;
}

echo "Total yang perlu dibayar oleh Beni adalah : Rp. " . number_format($totalBayar, 0, ',', '.');