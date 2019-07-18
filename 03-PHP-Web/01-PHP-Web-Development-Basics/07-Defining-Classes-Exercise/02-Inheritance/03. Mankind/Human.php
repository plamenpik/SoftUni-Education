<?php

abstract class Human
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    private function setFirstName(string $firstName): void
    {
        if (strtolower($firstName[0]) === $firstName[0]) {
            throw new Exception('Expected upper case letter!Argument: firstName');
        } elseif (strlen($firstName) < 4) {
            throw new Exception('Expected length at least 4 symbols!Argument: firstName');
        }
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    private function setLastName(string $lastName): void
    {
        if (strtolower($lastName[0]) === $lastName[0]) {
            throw new Exception('Expected upper case letter!Argument: lastName');
        } elseif (strlen($lastName) < 4) {
            throw new Exception('Expected length at least 4 symbols!Argument: lastName');
        }
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    protected function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    protected function getLastName(): string
    {
        return $this->lastName;
    }



}