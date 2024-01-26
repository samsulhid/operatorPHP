<?php
// 5 poin
$waktu1 = "19.00";
$waktu2 = "08.55";

$waktu1_pm = date("g.00 s a", strtotime("19:00"));
$waktu2_am = date("g.00 s a", strtotime("08:55"));

echo "Waktu 1 : " . $waktu1_pm . "<br>";
echo "Waktu 2 : " . $waktu2_am;
?>
