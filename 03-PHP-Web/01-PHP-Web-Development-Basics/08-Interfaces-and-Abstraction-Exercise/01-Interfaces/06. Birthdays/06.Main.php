<?php

spl_autoload_register();

$input = explode(' ', readline());
$citizensAdnPets = [];

while ($input[0] != 'End') {
    if ($input[0] == 'Citizen') {
        $name = $input[1];
        $birthday = $input[4];
        $citizensAdnPets[] = new Citizen($name, $birthday);
    } elseif ($input[0] == 'Pet') {
        $name = $input[1];
        $birthday = $input[2];
        $citizensAdnPets[] = new Pet($name, $birthday);
    }

    $input = explode(' ', readline());
}
$year = readline();
$years = [];

foreach ($citizensAdnPets as $item) {
    $years[] = $item->checkBirthday($year);
}

$years = array_filter($years);

if (count($years) != 0) {
    foreach ($years as $year) {
        echo $year;
    }
} else {
    echo '<no output>';
}