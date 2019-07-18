<?php

class Worker extends Human
{
    /**
     * @var float
     */
    private $weekSalary;

    /**
     * @var float
     */
    private $workHoursPerDay;

    /**
     * @var string
     */
    private $lastName;

    public function __construct(string $firstName, string $lastName, float $weekSalary, float $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    private function setLastName(string $lastName): void
    {
        if (strtolower($lastName[0]) === $lastName[0]) {
            throw new Exception('Expected upper case letter!Argument: lastName');
        } elseif (strlen($lastName) < 3) {
            throw new Exception('Expected length at least 3 symbols!Argument: lastName');
        }
            $this->lastName = $lastName;
    }

    /**
     * @param float $weekSalary
     * @throws Exception
     */
    private function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary < 11) {
            throw new Exception('Expected value mismatch!Argument: weekSalary');
        }
        $this->weekSalary = $weekSalary;
    }

    /**
     * @param float $workHoursPerDay
     * @throws Exception
     */
    private function setWorkHoursPerDay(float $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Exception('Expected value mismatch!Argument: workHoursPerDay');
        }
        $this->workHoursPerDay = $workHoursPerDay;
    }

    /**
     * @return float
     */
    public function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    /**
     * @return float
     */
    private function getWorkHoursPerDay(): float
    {
        return number_format($this->workHoursPerDay, 2, '.', '');
    }

    /**
     * @return string
     */
    protected function getLastName(): string
    {
        return $this->lastName;
    }

    private function getSalaryPerHour(): float
    {
        return number_format($this->getWeekSalary() / ($this->getWorkHoursPerDay() * 7), 2, '.', '');
    }

    public function __toString()
    {
        $salary = number_format($this->getWeekSalary(), 2, '.', '');
        $hoursPerDay = number_format($this->getWorkHoursPerDay(), 2, '.', '');
        return "First Name: {$this->getFirstName()}\nLast Name: {$this->getLastName()}\nWeek Salary: {$salary}\nHours per day: {$hoursPerDay}\nSalary per hour: {$this->getSalaryPerHour()}";
    }
}