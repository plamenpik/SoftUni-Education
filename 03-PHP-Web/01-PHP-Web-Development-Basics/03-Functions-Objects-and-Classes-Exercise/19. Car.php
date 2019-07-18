<?php

class Car1
{
    /**
     * @var float
     */
    private $speed;

    /**
     * @var float
     */
    private $fuel;

    /**
     * @var float
     */
    private $fuelEconomy;

    /**
     * Car1 constructor.
     * @param float $speed
     * @param float $fuel
     * @param float $fuelEconomy
     */
    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
    }

}

$carInfo = explode(' ', readline());
$car = new Car1($carInfo[0], $carInfo[1], $carInfo[2]);

$commands = readline();
while ($commands!= "END") {


    $commands = readline();
}