<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();


function sayHello(string $name, $filter){
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function sampleName(string $name){
    return "Sample $name";
}

sayHello("eko", "sampleName");
sayHello("eko", "strtoupper");
sayHello("eko", "strtolower");