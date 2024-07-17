<?php

function sayHello(string $name, callable $filter) {
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
sayHello("Eko", function(string $name) {
    return strtoupper($name);
});
sayHello("Eko", fn($name) => strtoupper($name));