<?php

spl_autoload_register();

$input = explode(' ', readline());
$borderControl = [];

while ($input[0] != 'End') {
    if (count($input) == 3) {
        $name = $input[0];
        $id = $input[2];
        $borderControl[] = new Citizen($name, $id);
    } else {
        $model = $input[0];
        $id = $input[1];
        $borderControl[] = new Robot($model, $id);
    }

    $input = explode(' ', readline());
}
$fakeId = readline();

foreach ($borderControl as $item) {
    $item->checkId($fakeId);
}