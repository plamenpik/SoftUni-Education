<?php

$input = readline();
$commands = explode(' ', readline());
$letter = $commands[0];
$number = $commands[1];
$counter = 0;

for ($i = 0; $i < strlen($input); $i++) {
    if ($input[$i] == $letter) {
        $counter++;
        if ($counter == $number) {
            echo $i;
            break;
        }
    }
}
if ($counter < $number) {
    echo 'Find the letter yourself!';
}