<?php

class Bus extends Vehicle
{

    public function drive(float $distance): void
    {
        $travel = $this->getFuelQuantity() / $this->getFuelConsumption();
        if ($distance <= $travel) {
            echo "Bus travelled $distance km" . PHP_EOL;
            $this->setFuelQuantity($this->getFuelQuantity() - ($distance * $this->getFuelConsumption()));
        } else {
            echo 'Bus needs refueling' . PHP_EOL;
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