<?php

$n = intval(readline());
$k = intval(readline());

$sequence = [1];
$sum = 0;

for ($i = 1; $i < $n; $i++) {
    for ($j = $k; $j > 0; $j--) {
        if (($i - $j) < 0) {
            continue;
        } else {
            $sum += $sequence[$i - $j];
        }
    }
    array_push($sequence, $sum);
    $sum = 0;
}

echo implode(' ', $sequence);
