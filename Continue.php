<?php

for ($a = 1; $a <=100 ; $a++ ) {
    if ($a % 2 == 1) {
        continue;
    }
    echo "Variable-$a" . PHP_EOL;
}