<?php

$input = explode(' ', readline());
$sum = 0;

for ($i = 0; $i < count($input); $i++) {
    $reversed = intval(ReverseArray($input[$i]));
    $sum += $reversed;
}

echo $sum;

function ReverseArray ($arr) {
    for ($i = 0; $i < strlen($arr) / 2; $i++) {
        $temp = $arr[$i];
        $arr[$i] = $arr[strlen($arr) - 1 - $i];
        $arr[strlen($arr) - 1 - $i] = $temp;
    }
    return $arr;
}