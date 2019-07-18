<?php

$numbers = explode(' ', readline());

$start = 0;
$length = 1;
$bestStart = 0;
$bestLength = 1;

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $numbers[$i - 1]) {
        $length++;

        if ($bestLength < $length) {
            $bestLength = $length;
            $bestStart = $start;
        }
    } else {
        $start = $i;
        $length = 1;
    }
}

for ($i = $bestStart; $i < $bestLength + $bestStart; $i++) {
    echo $numbers[$i] . " ";
}
