<?php

class Car extends Vehicle
{
    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        parent::__construct($fuelQuantity, $fuelConsumption);
        $this->setFuelConsumption($fuelConsumption + 0.9);
    }

    public function drive(float $distance): void
    {
        $travel = $this->getFuelQuantity() / $this->getFuelConsumption();
        if ($distance <= $travel) {
            echo "Car travelled $distance km" . PHP_EOL;
            $this->setFuelQuantity($this->getFuelQuantity() - ($distance * $this->getFuelConsumption()));
        } else {
            echo 'Car needs refueling' . PHP_EOL;
        }
    }

    public function refill(float $quantity): void
    {
        $this->setFuelQuantity($this->getFuelQuantity() + $quantity);
    }
}