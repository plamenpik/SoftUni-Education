<?php

$number = readline();
$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $sum += intval($number[$i]);
}

while ($sum / strlen($number) < 5) {
    $sum += 9;
    $number .= '9';
}

echo $number;