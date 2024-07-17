<?php

function increment(){
    $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();



function increments(){
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increments();
increments();
increments();