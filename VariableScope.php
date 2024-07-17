<?php

$nama = "Jono";

function sayHello(){
    global $nama;
    echo $nama . PHP_EOL;

    echo $GLOBALS["nama"] . PHP_EOL;
}

sayHello();