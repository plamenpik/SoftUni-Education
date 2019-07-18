<?php

$rowCol = explode(', ', readline());
$rowSize = $rowCol[0];
$colSize = $rowCol[1];
$matrix = [];
$startRow = 0;
$startCol = 0;

for ($i = 0; $i < $rowSize; $i++) {
    $matrix[$i] = array_map('intval', explode(", ", readline()));
}
$maxSum = 0;


for ($row = 0; $row < $rowSize - 1; $row++) {
    for ($col = 0; $col < $colSize - 1; $col++) {
        $currentSum =   $matrix[$row][$col] +
                        $matrix[$row][$col + 1] +
                        $matrix[$row + 1][$col] +
                        $matrix[$row + 1][$col + 1];
        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $startRow = $row;
            $startCol = $col;
        }
    }
}

for ($row1 = $startRow; $row1 < $startRow + 2; $row1++) {
    for ($col1 = $startCol; $col1 < $startCol + 2; $col1++) {
        echo $matrix[$row1][$col1] . ' ';
    }
    echo PHP_EOL;
}
echo $maxSum;

