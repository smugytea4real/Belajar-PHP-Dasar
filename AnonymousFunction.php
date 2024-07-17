<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Doni");
$sayHello("Dono");

function sayGoodbye(string $name, $filter){
    $finalname = $filter($name);
    echo "Good bye $finalname" . PHP_EOL;
}

sayGoodbye("Doni", function (string $name) {
    return strtoupper($name);
});

$filterfunction = function (string $name) {
    return strtoupper($name);
};

sayGoodbye("Doni", $filterfunction);

$firstname = "Setia";
$lastname = "Kurniawan";

$sayHelloName = function () use ($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$sayHelloName();

$firstname = "Budi";
$lastname = "Cahyo";

$sayHelloName();