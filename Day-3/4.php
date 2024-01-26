<?php
// 5 poin
$nilai = 50;

echo $predikat = $nilai >= 90
                ? "A"
            : ($nilai >= 80 && $nilai < 90
                ? "B"
            : "C");
