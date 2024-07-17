<?php

$values = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
var_dump($values);

$names = ["Doni", "Denny", "Donny"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Toni";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Dannang";
var_dump($names);

var_dump(count($names));

$don = array(
    "id" => "Don",
    "name" => "Doni",
    "age" => 20,
    "address" => array(
        "city" => "Surabaya",
    )
);
var_dump($don);

var_dump($don ["name"]);

$Jon = [
    "id" => "Jon",
    "name" => "Joni",
    "age" => 20,
    "address" => [
        "city" => "Semarang",
    ]
];
var_dump($Jon);

var_dump($Jon ["address"] ["city"]);
