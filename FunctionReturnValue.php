<?php

function sum(int $first, int $second): int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum("25", "25");
var_dump($total);

function getFinalReturnvalue(int $value): string
{
    if ($value >= 80) {
        return "A";
    }
    else if ($value >= 70) {
        return "B";
    }
    else if ($value >= 65) {
        return "C";
    }
    else if ($value >= 60) {
        return "D";
    }
    else {
        return "E";
    }
}

$score = getFinalReturnvalue(80);
var_dump($score);

$score = getFinalReturnvalue(40);
var_dump($score);