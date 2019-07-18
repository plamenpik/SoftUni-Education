<?php


class Student extends Human
{
    /**
     * @var string
     */
    private $facultyNumber;

    public function __construct(string $firstName, string $lastName, string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @param string $facultyNumber
     * @throws Exception
     */
    public function setFacultyNumber(string $facultyNumber): void
    {
        if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
            throw new Exception('Invalid faculty number!');
        }
        $this->facultyNumber = $facultyNumber;
    }

    /**
     * @return string
     */
    private function getFacultyNumber(): string
    {
        return $this->facultyNumber;
    }



    public function __toString()
    {
        return "First Name: {$this->getFirstName()}\nLast Name: {$this->getLastName()}\nFaculty number: {$this->getFacultyNumber()}\n";
    }
}