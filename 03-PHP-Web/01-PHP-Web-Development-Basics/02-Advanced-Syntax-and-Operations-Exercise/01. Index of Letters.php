<?php

$text = strtolower(readline());

for ($i = 0; $i < strlen($text); $i++) {
    $result = ord($text[$i]) - 97;
    echo "$text[$i] -> $result" . PHP_EOL;
}
