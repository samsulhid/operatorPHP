<?php
$berat_badan = 44; 
$tinggi_badan = 1.48; 

// Menghitung IMT
$imt = $berat_badan / ($tinggi_badan * $tinggi_badan);

// Menampilkan hasil IMT
echo "Berat Badan: {$berat_badan} kg<br>";
echo "Tinggi Badan: {$tinggi_badan} m<br>";
echo "Index Massa Tubuh (IMT): {$imt}<br>";

// Menentukan kategori IMT
if ($imt < 18.5) {
    echo "Underweight";
} elseif ($imt >= 18.5 && $imt < 24.9) {
    echo "Normal weight";
} elseif ($imt >= 25 && $imt < 29.9) {
    echo "Overweight";
} else {
    echo "Obese";
}
?>
