<?php

$text = explode(' ', readline());
$reversed = ReverseArray($text);
echo implode(' ', $reversed);

function ReverseArray ($arr) {
    for ($i = 0; $i < count($arr) / 2; $i++) {
        $temp = $arr[$i];
        $arr[$i] = $arr[count($arr) - 1 - $i];
        $arr[count($arr) - 1 - $i] = $temp;
    }
    return $arr;
}