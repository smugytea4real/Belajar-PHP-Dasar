<?php

$first = [
    "firstname" => "Jon",
];

$last = [
    "lastname" => "Doe",
];

$full = $first + $last;
var_dump($full);

$a = [
    "firstname" => "Jon",
    "lastname" => "Doe",
];

$b = [
    "firstname" => "Jon",
    "lastname" => "Doe",
];

var_dump($a == $b);