<?php

spl_autoload_register();

[$classCar, $carFuel, $carConsumption] = explode(' ', readline());
$car = new Car($carFuel, $carConsumption);

[$classTruck, $truckFuel, $truckConsumption] = explode(' ', readline());
$truck = new Truck($truckFuel, $truckConsumption);

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    [$action, $type, $amount] = explode(' ', readline());
    if ($type == 'Car') {
        if ($action == 'Drive') {
            $car->drive($amount);
        } else {
            $car->refill($amount);
        }
    } else {
        if ($action == 'Drive') {
            $truck->drive($amount);
        } else {
            $truck->refill($amount);
        }
    }
}
echo 'Car: ' . $car->getFuelQuantity() . PHP_EOL;
echo 'Truck: ' . $truck->getFuelQuantity() . PHP_EOL;