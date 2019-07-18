<?php

class Citizen implements BirthDayChecker
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $birthday;

    /**
     * Citizen constructor.
     * @param string $name
     * @param string $birthday
     */
    public function __construct(string $name, string $birthday)
    {
        $this->setName($name);
        $this->setBirthday($birthday);
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    private function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function checkBirthDay(string $birthday): string
    {
        $toCheck = substr($this->getBirthday(), strrpos($this->getBirthday(), $birthday));
        if ($toCheck === $birthday) {
            return $this->getBirthday(). PHP_EOL;
        }
        return '';
    }
}