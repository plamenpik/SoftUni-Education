<?php

class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;


    public function __construct(string $model, Engine $engine,
                        string $weight = 'n/a', string $color = 'n/a')
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function __toString()
    {
        return $this->getModel() . ':' . "\n" . $this->getEngine() . "\n" .
                    "\t" . 'Weight: ' . $this->getWeight() . "\n" .
                    "\t" . 'Color: ' . $this->getColor() . "\n";
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }


    public function getWeight(): string
    {
        return $this->weight;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct(string $model, int $power,
                      string $displacement = 'n/a', string $efficiency = 'n/a')
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }


    public function getModel(): string
    {
        return $this->model;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getDisplacement(): string
    {
        return $this->displacement;
    }

    public function getEfficiency(): string
    {
        return $this->efficiency;
    }

    public function setDisplacement(string $displacement): void
    {
        $this->displacement = $displacement;
    }

    public function setEfficiency(string $efficiency): void
    {
        $this->efficiency = $efficiency;
    }

    public function __toString()
    {
        return "\t" . $this->getModel() . ':' . "\n" .
                "\t" . "\t" . 'Power: ' . $this->getPower() . "\n" .
                "\t" . "\t" . 'Displacement: ' . $this->getDisplacement() . "\n" .
                "\t" . "\t" . 'Efficiency: ' . $this->getEfficiency();
    }
}

$engineCount = readline();
$engines = [];

while ($engineCount-- > 0) {
    $input = explode(' ', readline());
    $engineModel = $input[0];
    $enginePower = intval($input[1]);

    $engine = new Engine($engineModel, $enginePower);

    if (isset($input[2]) && ctype_digit($input[2])) {
        $engine->setDisplacement($input[2]);
        if (isset($input[3]) && !ctype_digit($input[3])) {
            $engine->setEfficiency($input[3]);
        }
    } elseif (isset($input[2]) && !ctype_digit($input[2])) {
        $engine->setEfficiency($input[2]);
    }
    array_push($engines, $engine);
}

$carCount = readline();
$cars = [];

while ($carCount-- > 0) {
    $input = explode(' ', readline());
    $carModel = $input[0];

    foreach ($engines as $engine) {
        if ($engine->getModel() == $input[1]) {
            $carEngine = $engine;
        }
    }

    $car = new Car($carModel, $carEngine);

    if (isset($input[2]) && ctype_digit($input[2])) {
        $car->setWeight($input[2]);
        if (isset($input[3]) && !ctype_digit($input[3])) {
            $car->setColor($input[3]);
        }
    } elseif (isset($input[2]) && !ctype_digit($input[2])) {
        $car->setColor($input[2]);
    }
    array_push($cars, $car);
}

foreach ($cars as $car) {
    echo $car;
}