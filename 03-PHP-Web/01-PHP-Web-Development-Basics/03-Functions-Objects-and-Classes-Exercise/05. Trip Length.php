<?php

$input = array_map('floatval', explode(', ', readline()));

$pointOne = ['x' => $input[0], 'y' => $input[1]];
$pointTwo = ['x' => $input[2], 'y' => $input[3]];
$pointThree = ['x' => $input[4], 'y' => $input[5]];

$caseOne = calculateDistance($pointOne, $pointTwo, $pointThree);
$caseTwo = calculateDistance($pointTwo, $pointOne, $pointThree);
$caseThree = calculateDistance($pointOne, $pointThree, $pointTwo);

if ($caseOne <= $caseTwo && $caseOne <= $caseThree) {
    echo '1->2->3: ' . $caseOne;
} else if ($caseTwo < $caseOne && $caseTwo <= $caseThree) {
    echo '2->1->3: ' . $caseTwo;
} else {
    echo '1->3->2: ' . $caseThree;
}

function calculateDistance($p1, $p2, $p3)
{
    return sqrt(pow(($p2['x'] - $p1['x']), 2) + pow(($p2['y'] - $p1['y']), 2))
        + sqrt(pow(($p3['x'] - $p2['x']), 2) + pow(($p3['y'] - $p2['y']), 2));
}