<?php

abstract class Vehicle
{
    /**
     * @var float
     */
    private $fuelQuantity;

    /**
     * @var float
     */
    private $fuelConsumption;

    /**
     * Vehicle constructor.
     * @param float $fuelQuantity
     * @param float $fuelConsumption
     */
    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
    }

    /**
     * @return float
     */
    public function getFuelQuantity(): float
    {
        return number_format($this->fuelQuantity, 2, '.', '');
    }

    /**
     * @param float $fuelQuantity
     */
    protected function setFuelQuantity(float $fuelQuantity): void
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    /**
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    /**
     * @param float $fuelConsumption
     */
    protected function setFuelConsumption(float $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public abstract function drive(float $distance): void;
    public abstract function refill(float $quantity): void;
}