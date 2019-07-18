<?php
declare(strict_types = 0);

function cooking($num, $command)
{
    $result = 0.0;
    switch ($command) {
        case 'chop':
            $result = $num / 2; break;
        case 'dice':
            $result = sqrt($num); break;
        case 'spice':
            $result = $num + 1; break;
        case 'bake':
            $result = $num * 3; break;
        case 'fillet':
            $result = $num * 0.8; break;
    }
    return $result;
}

$number = intval(readline());
$commands = array_map('strval', explode(', ', readline()));
$length = count($commands);

for ($i = 0; $i < $length; $i++) {
    echo cooking($number, $commands[$i]) . PHP_EOL;
    $number = cooking($number, $commands[$i]);
}