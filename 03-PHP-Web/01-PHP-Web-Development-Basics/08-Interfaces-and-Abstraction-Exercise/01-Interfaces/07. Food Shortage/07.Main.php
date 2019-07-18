<?php

spl_autoload_register();

$totalFood = 0;
$n = intval(readline());
$buyers = [];

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', readline());
    if (count($input) == 4) {
        $name = $input[0];
        $buyers[$name] = new Citizen($name, 'Citizen');
    } else {
        $name = $input[0];
        $buyers[$name] = new Rebel($name, 'Rebel');
    }
}

$buyer = readline();
while ($buyer != 'End') {
    if (array_key_exists($buyer, $buyers)) {
        $totalFood += $buyers[$buyer]->buyFood();
    }

    $buyer = readline();
}

echo "$totalFood units food";