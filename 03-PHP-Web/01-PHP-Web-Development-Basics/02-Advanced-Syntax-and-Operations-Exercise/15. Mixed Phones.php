<?php

$input = readline();
$phoneBook = [];

while ($input != 'Over') {
    $line = explode(' : ', $input);
    $firstLine = $line[0];
    $name = '';
    $number = 0;
    $isNotDigit = true;

    for ($digit = 0; $digit < strlen($firstLine); $digit++) {
        if (!is_numeric($firstLine[$digit])) {
            $number = $line[1];
            $name = $line[0];
            $isNotDigit = false;
            break;
        }
    }
    if ($isNotDigit) {
        $number = $line[0];
        $name = $line[1];
    }

    if (!array_key_exists($name, $phoneBook)) {
        $phoneBook[$name] = $number;
    }
    $input = readline();

}
ksort($phoneBook);

foreach ($phoneBook as $name => $number) {
    echo "$name -> $number" . PHP_EOL;
}