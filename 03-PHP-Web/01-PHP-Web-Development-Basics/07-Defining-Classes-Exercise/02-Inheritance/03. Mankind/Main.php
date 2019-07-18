<?php

spl_autoload_register();

//[$studentFirstName, $studentLastName, $facultyNumber] = explode(' ', readline());
//[$workerFirstName, $workerLastName, $weekSalary, $workHoursPerDay] = explode(' ', readline());
$studentInput = explode(' ', readline());
$workerInput = explode(' ', readline());
$studentFirstName = $studentInput[0]; $studentLastName = $studentInput[1]; $facultyNumber = $studentInput[2];
$workerFirstName = $workerInput[0]; $workerLastName = $workerInput[1]; $weekSalary = $workerInput[2];
$workHoursPerDay = $workerInput[3];

try {
    $student = new Student($studentFirstName, $studentLastName, $facultyNumber);
    $worker = new Worker($workerFirstName, $workerLastName, $weekSalary, $workHoursPerDay);
    echo $student . PHP_EOL;
    echo $worker;
} catch (Exception $ex) {
    echo $ex->getMessage();
}