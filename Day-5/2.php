<?php
function day($tanggal) {
    $hari = date('l', $timetamp);
    if($hari == 'Monday'){
        echo "Senin";
    }elseif($hari == "Tuesday"){
        echo "Selasa";
    }elseif($hari == "Wednesday"){
        echo "Rabu";
    }elseif($hari == "Thursday"){
        echo "Kamis";
    }elseif($hari == "Friday"){
        echo "Jumat";
    }elseif($hari == "Saturday"){
        echo "Sabtu";
    }elseif($hari == "Sunday"){
        echo "Minggu";
    }
}

$timetamp = strtotime(2024-01-25);
day($tanggal);


?>
