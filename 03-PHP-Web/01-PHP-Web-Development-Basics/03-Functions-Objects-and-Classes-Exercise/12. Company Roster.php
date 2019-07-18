<?php

class Employee
{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email = 'n/a';
    public $age = -1;


    public function __construct($name, $salary, $position, $department)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
    }
}

$employeesCount = intval(readline());
$employees = [];

for ($i = 0; $i < $employeesCount; $i++) {
    $line = explode(' ', readline());
    $name = $line[0];
    $salary = $line[1];
    $position = $line[2];
    $department = $line[3];

    $employee = new Employee($name, $salary, $position, $department);

    if (isset($line[4]) && !ctype_digit($line[4])) {
        $employee->email = $line[4];
        if (isset($line[5]) && ctype_digit($line[5])) {
            $employee->age = $line[5];
        }
    } elseif (isset($line[4]) && ctype_digit($line[4])) {
        $employee->age = $line[4];
    }
    array_push($employees, $employee);
}
print_r($employees);