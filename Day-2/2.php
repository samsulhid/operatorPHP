<?php

$umur = 12;

if ($umur >= 6 && $umur <=12) {
    echo "Waktu tidur yang baik 10 jam";
} elseif ($umur > 12 && $umur <=18) {
    echo "Waktu tidur yang baik 8-9 jam";
} else {
    echo "Waktu yang tidur yang baik 7-8 jam";
}