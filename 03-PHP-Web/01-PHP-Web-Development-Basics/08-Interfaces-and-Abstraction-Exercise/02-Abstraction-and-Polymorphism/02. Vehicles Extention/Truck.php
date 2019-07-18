<?php

class Truck extends Vehicle
{
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelConsumption, $tankCapacity);
        $this->setFuelConsumption($fuelConsumption + 1.6);
    }

    public function drive(float $distance): void
    {
        $travel = $this->getFuelQuantity() / $this->getFuelConsumption();
        if ($distance <= $travel) {
            echo "Truck travelled $distance km" . PHP_EOL;
            $this->setFuelQuantity($this->getFuelQuantity() - ($distance * $this->getFuelConsumption()));
        } else {
            echo 'Truck needs refueling' . PHP_EOL;
        }
    }

    public function refill(float $quantity): void
    {
        $quantity *= 0.95;
        $this->setFuelQuantity($this->getFuelQuantity() + $quantity);
    }
}