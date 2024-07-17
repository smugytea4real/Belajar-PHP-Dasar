<?php

$firstmame = "Doni";
$lastname = "Ramadhan";

$sayname = function() use ($firstmame, $lastname) {
    echo "Hello $firstmame $lastname" . PHP_EOL;
};

$arrowfunction = fn() => "Hello $firstmame $lastname" . PHP_EOL;

echo $sayname();
echo $arrowfunction();