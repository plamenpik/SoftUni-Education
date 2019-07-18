<?php

abstract class SpecialisedSoldier extends Privatee
{
    /**
     * @var string
     */
    private $crops;

    /**
     * SpecialisedSoldier constructor.
     * @param string $crops
     */
    public function __construct(int $id, string $firstName, string $lastName,
                                float $salary, string $crops)
    {
        parent::__construct($id, $firstName, $lastName, $salary);
        $this->setCrops($crops);
    }

    /**
     * @return string
     */
    public function getCrops(): string
    {
        return $this->crops;
    }

    /**
     * @param string $crops
     */
    private function setCrops(string $crops): void
    {
        $this->crops = $crops;
    }
}