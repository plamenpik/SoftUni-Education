<?php

$arr = explode(' ', readline());
$rotations = intval(readline());
$sum = array_fill(0, count($arr), 0);

for ($i = 0; $i < $rotations; $i++) {
    $arr = ShiftArray($arr);
    for ($j = 0; $j < count($arr); $j++) {
        $sum[$j] += $arr[$j];
    }
}
echo implode(' ', $sum);

function ShiftArray($arr) {
    $last = $arr[count($arr) - 1];
    for ($i = count($arr) - 1; $i > 0; $i--) {
        $arr[$i] = $arr[$i - 1];
    }
    $arr[0] = $last;
    return $arr;
}