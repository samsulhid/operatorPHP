<?php

function tabungan($jumlah, $bulan) {
    $total = $jumalah + ($jumlah * $bulan / 100);
    return 'Rp. ' .number_format($total,0,',','.');
}

tabungan(4250000, 10)
?>