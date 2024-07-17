<?php

$gender = "PRIA";

if ($gender == "PRIA") {
    echo "hi om" . PHP_EOL;
}
else {
    echo "hi nona" . PHP_EOL;
}

$gender = "WANITA";
$hi = $gender == "PRIA" ? "hi om" : "hi nona";
echo $hi . PHP_EOL;