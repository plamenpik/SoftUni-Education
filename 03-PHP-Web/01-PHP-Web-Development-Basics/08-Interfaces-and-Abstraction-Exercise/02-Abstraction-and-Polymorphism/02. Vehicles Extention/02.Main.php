<?php

spl_autoload_register();

[$class1, $carFuel, $carConsumption, $carTankCapacity] = explode(' ', readline());
$car = new $class1($carFuel, $carConsumption, $carTankCapacity);

[$class2, $truckFuel, $truckConsumption, $truckTankCapacity] = explode(' ', readline());
$truck = new $class2($truckFuel, $truckConsumption, $truckTankCapacity);

[$class3, $busFuel, $busConsumption, $busTankCapacity] = explode(' ', readline());
$bus = new $class3($busFuel, $busConsumption, $busTankCapacity);

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    [$action, $type, $amount] = explode(' ', readline());
    if ($type == 'Car') {
        if ($action == 'Drive') {
            $car->drive($amount);
        } else {
            $car->refill($amount);
        }
    } elseif ($type == 'Truck') {
        if ($action == 'Drive') {
            $truck->drive($amount);
        } else {
            $truck->refill($amount);
        }
    } else {
        if ($action == 'Drive') {
            $bus->setFuelConsumption($bus->getFuelConsumption() + 1.4);
            $bus->drive($amount);
            $bus->setFuelConsumption($busConsumption);
        } elseif ($action == 'DriveEmpty') {
            $bus->drive($amount);
        } else {
            $bus->refill($amount);
        }
    }
}

echo 'Car: ' . $car->getFuelQuantity() . PHP_EOL;
echo 'Truck: ' . $truck->getFuelQuantity() . PHP_EOL;
echo 'Bus: ' . $bus->getFuelQuantity() . PHP_EOL;