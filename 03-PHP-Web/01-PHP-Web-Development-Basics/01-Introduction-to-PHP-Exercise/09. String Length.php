<?php

$input = readline();
$arr = [];
for ($i = 0; $i < 20; $i++) {
    $arr[$i] = '*';
}

if (strlen($input) >= 20) {
    echo substr($input, 0, 20);
} else {
    for ($i = 0; $i < strlen($input); $i++){
        $arr[$i] = $input[$i];
    }
}

foreach ($arr as $item){
    echo $item;
}