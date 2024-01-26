<?php
// $a = 9;

// if($a > 0){
//     echo "positif";
//     if($a > 10){
//         echo "lebih dari 10";
//     }else{
//         echo "tidak lebih dari 10";
//     }
// }else{
//     echo "negatif";
// }

// nilai andi adalah 90 dan kehadiran 100%, syarat untuk masuk kategori siswa berprestasi 
// adalah harus memnuhi syarat dengan nilai minimal 85 dan kehadiran 98%

$nilai = 90;
$kahadiran = 100;

if($nilai >= 90 && $kahadiran >=98){
    echo "Masuk ke kategori siswa berprestasi";
}else{
    echo "Tidak masuk ke kategori siswa berprestas";
}
?>