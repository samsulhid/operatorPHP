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

// $panjang_tanah = 13; 
// $lebar_tanah = 9; 

// $luas = $panjang_tanah * $lebar_tanah;

// $tipe = $luas < 90 ? "Tipe 36"
//         : ($luas >= 90 && $luas < 96 ? "Tipe 45"
//         : ($luas >= 96 && $luas < 120 ? "Tipe 54"
//         : ($luas >= 120 && $luas <150 ? "Tipe 60"
//         : "Tipe 70" )));

//     echo $tipe;

// if ($luas_tanah < 90) {
//     $tipe_rumah = "Tipe 36";
// } elseif ($luas_tanah >= 90 && $luas_tanah < 96) {
//     $tipe_rumah = "Tipe 45";
// } elseif ($luas_tanah >= 96 && $luas_tanah < 120) {
//     $tipe_rumah = "Tipe 54";
// } elseif ($luas_tanah >= 120 && $luas_tanah < 150) {
//     $tipe_rumah = "Tipe 60";
// } else {
//     $tipe_rumah = "Tipe 70";
// }

// echo "Luas tanah : {$luas_tanah} m2<br>";
// echo "Tipe rumah : {$tipe_rumah}";

// Day-2 no 10
// minimarket eko menjual berbagai kebutuhan, setiap pelanggan yang berbelanja lebih dari Rp. 100.000 akan mendapatkan 
// voucher potongan harga sebesar Rp. 10.000, jikatotal belanja dibawah Rp. 100.000 tidak mendapatkan diskon. Jika andi 
// belanja dengan total Rp. 150.000 berapakah yang harus andi bayar ?

// $belanja = 150000;
// $diskon = $belanja > 100000 ? 10000 : 0;
// $jumlah_yang_harus_dibayar = $belanja - $diskon;

// echo "Total belanja: Rp. " . number_format($belanja, 0, ",", ".") . "<br>";
// echo "Diskon: Rp. " . number_format($diskon, 0, ",", ".") . "<br>";
// echo "Jumlah yang harus dibayar: Rp. " . number_format($jumlah_yang_harus_dibayar, 0, ",", ".");
