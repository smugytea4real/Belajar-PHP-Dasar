<?php

function sayHello($name = "Anonymous"){
    echo "Hello $name" . PHP_EOL;
}

sayHello("Eko");
sayHello("Adi");
sayHello();

function sayHi($firstname , $name = ""){
    echo "Hello $firstname $name" . PHP_EOL;
}

sayHi("Eko", "kurniawan");
sayHi("Adi");
sayHi("Joko");

function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(12, 12);
sum(true, false);
sum("20", "31");

function sumALL(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [10, 20, 30, 40, 50];

sumALL(...$values);
sumALL(1, 2, 3, 4, 5,);




