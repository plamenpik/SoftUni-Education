<?php

$rowCol = explode(', ', readline());
$row = $rowCol[0];
$col = $rowCol[1];
$line = explode(', ', readline());
$matrix = [];

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $matrix[$i][$j] = $line[$j];
    }
    $line = explode(', ', readline());
}

$sum = 0;
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $sum += $matrix[$i][$j];
    }
}

array_push($rowCol, $sum);

foreach ($rowCol as $item) {
    echo $item . PHP_EOL;
}