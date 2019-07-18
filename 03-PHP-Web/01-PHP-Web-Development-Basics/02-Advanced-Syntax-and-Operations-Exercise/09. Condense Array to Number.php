<?php

$numbers = explode(' ', readline());
if (count($numbers) == 1) {
    echo $numbers[0];
    return;
}
$condense = array_fill(0, count($numbers) - 1, 0);

while (count($condense) != 0) {
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $condense[$i] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $condense;
    $condense = array_fill(0, count($numbers) - 1, 0);
}
echo $numbers[0];