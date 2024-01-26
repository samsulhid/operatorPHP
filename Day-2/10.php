<?php

$totalBelanja = 160000;

if($totalBelanja >= 100000 && $totalBelanja < 150000) {
    echo "Selamat anda mendapatkan voucher sebsar Rp. 10.000";
}elseif($totalBelanja >= 150000){
    echo "Selamat anda mendapatkan voucher sebesar Rp. 10.000 dan 1 dus permen kaki";
}else{
    echo "Maaf, anda tidak mendapatkan voucher";
}

?>