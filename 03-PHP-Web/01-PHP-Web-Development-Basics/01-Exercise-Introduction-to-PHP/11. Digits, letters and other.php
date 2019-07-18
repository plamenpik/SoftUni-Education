<?php

$input = readline();

for ($i = 0; $i < strlen($input); $i++){
    if (is_numeric($input[$i])) {
        echo $input[$i];
    }
}
echo PHP_EOL;

for ($i = 0; $i < strlen($input); $i++){
    if (ctype_alpha($input[$i])) {
        echo $input[$i];
    }
}
echo PHP_EOL;

for ($i = 0; $i < strlen($input); $i++){
    if (ctype_punct($input[$i])) {
        echo $input[$i];
    }
}