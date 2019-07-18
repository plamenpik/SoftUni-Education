<?php

$numOne = intval(fgets(STDIN));
$numTwo = intval(fgets(STDIN));

for ($i = min($numOne, $numTwo); $i <= max($numOne, $numTwo); $i++){
    echo $i . PHP_EOL;
}