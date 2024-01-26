<?php
function getBMICategory($berat, $tinggi) {
    $imt = $berat / ($tinggi * $tinggi);

    if ($imt < 18.5) {
        return "Underweight";
    } elseif ($imt >= 18.5 && $imt < 24.9) {
        return "Normal weight";
    } elseif ($imt >= 25 && $imt < 29.9) {
        return "Overweight";
    } else {
        return "Obese";
    }
}

$berat_badan = 44; 
$tinggi_badan = 1.48; 

$imt = $berat_badan / ($tinggi_badan * $tinggi_badan);

echo "Berat Badan: {$berat_badan} kg\n";
echo "Tinggi Badan: {$tinggi_badan} m\n";
echo "Index Massa Tubuh (IMT): {$imt}\n";

$bmiCategory = getBMICategory($berat_badan, $tinggi_badan);
echo "Kategori IMT: {$bmiCategory}\n";
?>