<?php

$input = readline();
$phoneBook = [];

while ($input != 'END') {
    $line = explode(' ', $input);
    switch ($line[0]) {
        case 'A':
            if (!array_key_exists($line[1], $phoneBook)) {
                $phoneBook[$line[1]] = $line[2];
            } else {
                $phoneBook[$line[1]] = $line[2];
            }
            break;
        case 'S':
            if (array_key_exists($line[1], $phoneBook)) {
                foreach ($phoneBook as $key => $value) {
                    if ($key == $line[1]) {
                        echo "$key -> $value" . PHP_EOL;
                    }
                }
            } else {
                $contact = $line[1];
                echo "Contact $contact does not exist." . PHP_EOL;
            }
            break;
    }
    $input = readline();
}