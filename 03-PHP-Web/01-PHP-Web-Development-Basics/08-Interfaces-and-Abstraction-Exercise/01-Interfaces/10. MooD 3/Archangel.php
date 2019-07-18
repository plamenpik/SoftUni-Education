<?php

class Archangel extends Hero
{
    /**
     * @var float
     */
    private $mana;

    /**
     * Demon constructor.
     * @param string $username
     * @param string $type
     * @param int $level
     * @param float $mana
     */
    public function __construct(string $username, string $type, int $level, float $mana)
    {
        parent::__construct($username, $type, $level);
        $this->setMana($mana);
    }

    /**
     * @return float
     */
    public function getMana(): float
    {
        return $this->mana;
    }

    /**
     * @param float $mana
     */
    private function setMana(float $mana): void
    {
        $this->mana = $mana;
    }

    public function setPassword(): void
    {
        $this->password = strrev($this->getUsername()) . strlen($this->getUsername()) * 21;
    }

    public function printLevel(): string
    {
        return $this->getMana() * $this->getLevel();
    }
}