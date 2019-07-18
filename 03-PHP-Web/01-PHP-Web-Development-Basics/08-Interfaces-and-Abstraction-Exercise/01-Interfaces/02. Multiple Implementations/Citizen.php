<?php

class Citizen implements Person, Identifiable, Birthable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $birthDay;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthDay
     */
    public function __construct(string $name, int $age, string $id, string $birthDay)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthday($birthDay);
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

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthDay;
    }

    /**
     * @param string $birthDay
     */
    public function setBirthday(string $birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->getName() ."\n" . $this->getAge()
            ."\n" . $this->getId() ."\n" . $this->getBirthday();
    }
}