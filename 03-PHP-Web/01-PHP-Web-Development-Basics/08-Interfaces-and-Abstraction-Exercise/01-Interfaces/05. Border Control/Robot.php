<?php

class Robot implements IdChecker
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $id;

    /**
     * Robot constructor.
     * @param string $name
     * @param string $id
     */
    public function __construct(string $name, string $id)
    {
        $this->setName($name);
        $this->setId($id);
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
    private function setName(string $name): void
    {
        $this->name = $name;
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
    private function setId(string $id): void
    {
        $this->id = $id;
    }

    public function checkId(string $id): void
    {
        $toCheck = substr($this->getId(), strrpos($this->getId(), $id));
        if ($toCheck === $id) {
            echo $this->getId(). PHP_EOL;
        }
    }
}