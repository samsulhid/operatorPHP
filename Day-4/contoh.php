<?php
// Day-1 no 3
// $nilai = 9;

//if else biasa
// if ( $nilai > 8 ) {
// 	$predikat = 'Sangat Baik';
// } else if ( $nilai >= 7 && $nilai <= 8 ) {
// 	$predikat = 'Baik';
// } else if ( $nilai <= 6 && $nilai > 5 ) {
// 	$predikat = 'Sedang';
// } else {
// 	$predikat = 'Kurang';
// }

// bentuk yang lain
// $predikat = $nilai > 8 
// 			? 'Sangat Baik' 
// 			: ( $nilai >= 7 && $nilai <= 8 
// 				? 'Baik' 
// 				: ( $nilai <= 6 && $nilai > 5 
// 					? 'Sedang' 
// 					: 'Kurang'
// 				   ) 
// 			  );
// echo $predikat; // Sedang

// Day-2 no 1
// ubah kode dibawah menjadi operator ternary
// $a = 78;

// if ($a >= 90 && $a <=100) {
//     echo "kategori A";
// }elseif ($a < 90 && $a >= 75) { 
//     echo "Kategori B";
// }else {
//     echo "Kategori C";
// }

// $nilai = 89;

// $predikat = $nilai > 90
//             ? "Sangat baik"
//             : ($nilai >= 80 && $nilai < 90
//                 ? "Baik"
//                 : ($nilai >=75 && $nilai < 80
//                     ? "Cukup"
//                     : "Kurang"
//                 )
//             );
// echo $predikat;

// Day-2 no 3
// ubah kode dibawah menjadi if else ternary
// $bilangan = 0;

// // // if ($bilangan > 0) {
// // //     echo "Bilangan positif";
// // // } elseif ($bilangan == 0) {
// // //     echo "Bilangan cacah";
// // // } else {
// // //     echo "Bilangan negatif";
// // // }

// Operator ternary
// $hasil = $bilangan < 0 ? "Negatif"
//         : ($bilangan > 0 ? "Positif"
//         : "Cacah" );

// echo $hasil;