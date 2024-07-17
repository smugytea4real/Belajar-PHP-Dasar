<?php

$nilai = 70;
$absen = 75;

if ($nilai >= 90 && $absen >= 85) {
    echo "Nilai anda A" . PHP_EOL;
}else if($nilai >= 80 && $absen >= 75) {
    echo "Nilai anda B" . PHP_EOL;
}else if($nilai >= 75 && $absen >= 70) {
    echo "Nilai anda C" . PHP_EOL;
}else if($nilai >= 70 && $absen >= 65) {
    echo "Nilai anda D" . PHP_EOL;
}else {
    echo "Nilai anda E" . PHP_EOL;
}