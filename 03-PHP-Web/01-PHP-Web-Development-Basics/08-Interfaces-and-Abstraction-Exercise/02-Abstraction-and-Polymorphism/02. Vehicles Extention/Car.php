<?php

class Car extends Vehicle
{
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelConsumption, $tankCapacity);
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
        if ($this->getFuelQuantity() <= 0) {
            echo 'Fuel must be a positive number' . PHP_EOL;
            $this->setFuelQuantity($this->getFuelQuantity() - $quantity);
        } elseif ($this->getFuelQuantity() > $this->getTankCapacity()) {
            echo 'Cannot fit fuel in tank' . PHP_EOL;
            $this->setFuelQuantity($this->getFuelQuantity() - $quantity);
        }
    }
}