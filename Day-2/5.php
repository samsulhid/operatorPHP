<?php
// $andi_lahir = 2004;
// $eko_lahir = $andi_lahir - 3;

// function cek_kabisat($tahun)
// {
//     if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }

// if (cek_kabisat($andi_lahir) && cek_kabisat($eko_lahir)) {
//     echo "Keduanya lahir di tahun kabisat.";
// } elseif (cek_kabisat($andi_lahir)) {
//     echo "Andi lahir di tahun kabisat.";
// } elseif (cek_kabisat($eko_lahir)) {
//     echo "Eko lahir di tahun kabisat.";
// } else {
//     echo "Tidak ada yang lahir di tahun kabisat.";
// }

$andi_lahir = 2004;
$eko_lahir = $andi_lahir - 3; 

if (($andi_lahir % 4 == 0 && $andi_lahir % 100 != 0) || $andi_lahir % 400 == 0) {
    echo "Andi lahir di tahun kabisat.";
} else {
    echo "Andi tidak lahir di tahun kabisat.";
}

echo "<br>";

if (($eko_lahir % 4 == 0 && $eko_lahir % 100 != 0) || $eko_lahir % 400 == 0) {
    echo "Eko lahir di tahun kabisat.";
} else {
    echo "Eko tidak lahir di tahun kabisat.";
}
?>
