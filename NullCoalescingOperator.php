<?php

$data = [
    "action" => "ada"
];

if (isset($data["action"])) {
    $action = $data["action"];
}
else {
    $action = "tidak ada";
}

echo $action . PHP_EOL;

$data = [
    "action" => null
];

$action = $data["action"] ?? "tidak ada";

echo $action . PHP_EOL;