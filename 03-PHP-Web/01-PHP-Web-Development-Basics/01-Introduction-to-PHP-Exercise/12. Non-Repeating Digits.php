<?php

$number = intval(readline());

if ($number < 102) {
    echo 'no';
    return;
}
$result = [];
$digitString = "";
for ($p1 = 1; $p1 <= 9; $p1++) {
    for ($p2 = 0; $p2 <= 9; $p2++) {
        for ($p3 = 0; $p3 <= 9; $p3++) {
            if ($p1 != $p2 && $p2 != $p3 && $p1 != $p3) {
                $digitString = "$p1$p2$p3";
                array_push($result, $digitString);
                if ($digitString == $number) {
                    echo implode(", ", $result);
                    return;
                }
            }
        }
    }
}
