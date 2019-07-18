<?php

$groupSize = readline();
$package = readline();
$groupSize = intval($groupSize);
$hallName = '';
$price = floatval(0);

if ($groupSize > 120) {
    echo 'We do not have an appropriate hall.';
    return;
}

if ($groupSize <= 50) {
    $hallName = 'Small Hall';
    $hallPrice = 2500;
    switch ($package) {
        case 'Normal':
            $packagePrice = 500;
            $price = number_format((($hallPrice + $packagePrice) * 0.95) / $groupSize, 2);
            break;
        case 'Gold':
            $packagePrice = 750;
            $price = number_format((($hallPrice + $packagePrice) * 0.90) / $groupSize, 2);
            break;
        case 'Platinum':
            $packagePrice = 1000;
            $price = number_format((($hallPrice + $packagePrice) * 0.85) / $groupSize, 2);
            break;
    }
} elseif ($groupSize > 50 && $groupSize <= 100) {
    $hallName = 'Terrace';
    $hallPrice = 5000;
    switch ($package) {
        case 'Normal':
            $packagePrice = 500;
            $price = number_format((($hallPrice + $packagePrice) * 0.95) / $groupSize, 2);
            break;
        case 'Gold':
            $packagePrice = 750;
            $price = number_format((($hallPrice + $packagePrice) * 0.90) / $groupSize, 2);
            break;
        case 'Platinum':
            $packagePrice = 1000;
            $price = number_format((($hallPrice + $packagePrice) * 0.85) / $groupSize, 2);
            break;
    }
} elseif ($groupSize > 100 && $groupSize <= 120) {
    $hallName = 'Great Hall';
    $hallPrice = 7500;
    switch ($package) {
        case 'Normal':
            $packagePrice = 500;
            $price = number_format((($hallPrice + $packagePrice) * 0.95) / $groupSize, 2);
            break;
        case 'Gold':
            $packagePrice = 750;
            $price = number_format((($hallPrice + $packagePrice) * 0.90) / $groupSize, 2);
            break;
        case 'Platinum':
            $packagePrice = 1000;
            $price = number_format((($hallPrice + $packagePrice) * 0.85) / $groupSize, 2);
            break;
    }
}
echo "We can offer you the $hallName\n";
echo "The price per person is $price$";