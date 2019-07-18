<?php

$input = readline();
$shopInventory = [];

while ($input != 'shopping time') {
    $splited = explode(' ', $input);
    $product = $splited[1];
    $quantity = $splited[2];

    if (!array_key_exists($product, $shopInventory)) {
        $shopInventory[$product] = 0;
    }
    $shopInventory[$product] += $quantity;
    $input = readline();
}
$input = readline();

while ($input != 'exam time') {
    $splited = explode(' ', $input);
    $product = $splited[1];
    $quantity = $splited[2];

    if (array_key_exists($product, $shopInventory)) {

        if ($shopInventory[$product] <= 0) {
            echo "$product out of stock" . PHP_EOL;
        } else {
            $shopInventory[$product] -= $quantity;
        }
    } else {
        echo "$product doesn't exist" . PHP_EOL;
    }
    $input = readline();
}

foreach ($shopInventory as $key => $value) {
    if ($value > 0) {
        echo "$key -> $value" . PHP_EOL;
    }
}
