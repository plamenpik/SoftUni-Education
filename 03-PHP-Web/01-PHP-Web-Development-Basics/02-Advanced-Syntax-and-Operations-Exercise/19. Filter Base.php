<?php

$position = [];
$salary = [];
$age = [];

while (($input = readline()) != 'filter base') {
    $splited = explode(' -> ', $input);

    $name = $splited[0];
    $positionOrSalaryOrAge = $splited[1];

    if (is_numeric($positionOrSalaryOrAge)) {

        if (strpos($positionOrSalaryOrAge, '.') !== false) {

            if (!array_key_exists($name, $salary)) {

                $salary[$name] = (float)$positionOrSalaryOrAge;
            }
        } else {

            if (!array_key_exists($name, $age)) {
                $age[$name] = (int)$positionOrSalaryOrAge;
            }
        }
    } else  {

        if (!array_key_exists($name, $position)) {
            $position[$name] = $positionOrSalaryOrAge;
        }
    }
}

$input = readline();

if ($input == 'Position') {

    foreach ($position as $name => $pos) {
        echo "Name: $name" . PHP_EOL;
        echo "Position: $pos" . PHP_EOL;
        echo '====================' . PHP_EOL;
    }
} elseif ($input == 'Salary') {

    foreach ($salary as $name => $sal) {
        echo "Name: $name" . PHP_EOL;
        printf("Salary: %.2f", $sal);
        echo PHP_EOL;
        echo '====================' . PHP_EOL;
    }
} elseif ($input == 'Age') {

    foreach ($age as $name => $a) {
        echo "Name: $name" . PHP_EOL;
        echo "Age: $a" . PHP_EOL;
        echo '====================' . PHP_EOL;
    }
}