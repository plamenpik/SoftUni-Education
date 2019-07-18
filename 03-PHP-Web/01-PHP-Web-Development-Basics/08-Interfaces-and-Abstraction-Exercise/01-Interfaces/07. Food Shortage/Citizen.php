<?php

class Citizen implements Buyer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * Citizen constructor.
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->setName($name);
        $this->type = $type;
        $this->setFood(10);
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
     * @return int
     */
    public function getFood(): int
    {
        return $this->food;
    }

    /**
     * @param int $food
     */
    private function setFood(int $food): void
    {
        $this->food = $food;
    }

    /**
     * @var int
     */
    private $food;

    public function buyFood(): int
    {
        return $this->getFood();
    }
}