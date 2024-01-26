<?php
// 5poin
$siswa = [
[
    'nama' => 'Samsul',
    'rombel' => 'PPLG XI-5',
    'rayon' => 'Cisarua 1',
    'JK' => 'L',
],
[
    'nama' => 'Dhea',
    'rombel' => 'PPLG XI-5',
    'rayon' => 'Tajur 2',
    'JK' => 'P',
],
[
    'nama' => 'Baim',
    'rombel' => 'PPLG XI-5',
    'rayon' => 'Ciawi 5',
    'JK' => 'L',
],
[
    'nama' => 'Komang',
    'rombel' => 'PPLG XI-2',
    'rayon' => 'Cicurug 3',
    'JK' => 'L',
],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data['nama'] . "<br>";
    echo "Rombel: " . $data['rombel'] . "<br>";
    echo "Rayon: " . $data['rayon'] . "<br>";
    echo "Jenis Kelamin: " . $data['JK'] . "<br>";
    echo "<br>";
}