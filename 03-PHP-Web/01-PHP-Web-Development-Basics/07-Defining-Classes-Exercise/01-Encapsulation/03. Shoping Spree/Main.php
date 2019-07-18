<?php

spl_autoload_register();

$personData = preg_split('/[;=]/', readline());
$people = [];

for ($i = 0; $i < count($personData) - 1; $i += 2) {

    try {
        $name = $personData[$i];
        $money = floatval($personData[$i + 1]);
        $people[$name] = new Person($name, $money);
    } catch (Exception $ex) {
        echo $ex->getMessage() . PHP_EOL;
        return;
    }
}

$productData = preg_split('/[;=]/', readline(), -1, PREG_SPLIT_NO_EMPTY);
$products = [];

for ($i = 0; $i < count($productData) - 1; $i += 2) {
    $name = $productData[$i];
    $cost = $productData[$i + 1];

    $products[$name] = new Product($name, $cost);
}

$input = readline();

while ($input != 'END') {
    $commands = explode(' ', $input);
    $personName = $commands[0];
    $productName = $commands[1];

    try {
        $people[$personName]->buyProduct($products[$productName]);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    $input = readline();
}

foreach ($people as $person) {
    echo $person;
}