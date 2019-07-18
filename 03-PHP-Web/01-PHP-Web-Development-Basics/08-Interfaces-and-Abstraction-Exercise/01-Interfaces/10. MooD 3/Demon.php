<?php

class Demon extends Hero
{
    /**
     * @var float
     */
    private $energy;

    /**
     * Demon constructor.
     * @param string $username
     * @param string $type
     * @param int $level
     * @param float $energy
     */
    public function __construct(string $username, string $type, int $level, float $energy)
    {
        parent::__construct($username, $type, $level);
        $this->setEnergy($energy);
    }

    /**
     * @return float
     */
    public function getEnergy(): float
    {
        return $this->energy;
    }

    /**
     * @param float $energy
     */
    private function setEnergy(float $energy): void
    {
        $this->energy = $energy;
    }

    public function setPassword(): void
    {
        $this->password = strlen($this->getUsername()) * 217;
    }

    public function printLevel(): string
    {
        $energy = $this->getEnergy() * $this->getLevel();
        $energy = number_format($energy, 1, '.', '');
        return $energy ;
    }
}