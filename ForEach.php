<?php

$names = [
    "Jon",
    "Denny",
    "Donny"
];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data = $name" . PHP_EOL;
}

$orang = [
    "firstname" => "Jon",
    "middlename" => "Denny",
    "lastname" => "Morghan"
]; 

foreach ($orang as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

