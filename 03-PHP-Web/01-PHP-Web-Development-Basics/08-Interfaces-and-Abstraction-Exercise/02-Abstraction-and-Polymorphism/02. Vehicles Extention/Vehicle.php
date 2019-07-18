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
     * @var float
     */
    private $tankCapacity;

    /**
     * Vehicle constructor.
     * @param float $fuelQuantity
     * @param float $fuelConsumption
     * @param float $tankCapacity
     */
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        if ($tankCapacity < 0) {
            $this->setTankCapacity(0);
        }
        $this->setTankCapacity($tankCapacity);
    }

    /**
     * @return float
     */
    public function getTankCapacity(): float
    {
        return $this->tankCapacity;
    }

    /**
     * @param float $tankCapacity
     */
    private function setTankCapacity(float $tankCapacity): void
    {
        $this->tankCapacity = $tankCapacity;
    }

    /**
     * @return string
     */
    public function getFuelQuantity(): string
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
    public function setFuelConsumption(float $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public abstract function drive(float $distance): void;
    public abstract function refill(float $quantity): void;
}