<?php

$name = "Jon";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

$name = "Don";

echo "Is Name Null? : ";
echo var_dump(is_null($name));
echo "\n";
