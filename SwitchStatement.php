<?php

$nilai = "C";

if($nilai == "A") {
    echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
}else if($nilai == "B" || $nilai == "C") {
    echo "Anda Lulus" . PHP_EOL;
}else if($nilai == "D") {
    echo "Anda Tidak Lulus" . PHP_EOL;
}else {
    echo "Anda Mungkin Salah Jurusan" . PHP_EOL;
}

switch($nilai){
    case "A";
        echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Mungkin Salah Jurusan" . PHP_EOL;
}