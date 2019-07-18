<?php
/**
 * Created by PhpStorm.
 * User: CoDiNg
 * Date: 29.10.2018 г.
 * Time: 16:22
 */

class Privatee extends Soldier
{
    /**
     * @var float
     */
    private $salary;

    /**
     * Privatee constructor.
     * @param float $salary
     */
    public function __construct(int $id, string $firstName, string $lastName, float $salary)
    {
        parent::__construct($id, $firstName, $lastName);
        $this->setSalary($salary);
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    private function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function __toString()
    {
        return "Name: {$this->getFirstName()} {$this->getLastName()} Id: {$this->getId()} Salary: {$this->getSalary()}\n";
    }
}