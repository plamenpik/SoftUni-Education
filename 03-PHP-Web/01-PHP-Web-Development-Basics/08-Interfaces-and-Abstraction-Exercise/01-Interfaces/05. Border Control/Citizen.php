<?php


class Citizen implements IdChecker
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
     * Citizen constructor.
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
    public function setName(string $name): void
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
    public function setId(string $id): void
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