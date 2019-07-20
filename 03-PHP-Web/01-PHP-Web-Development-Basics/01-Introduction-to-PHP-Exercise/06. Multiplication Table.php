<?php

$num = intval(fgets(STDIN));

for ($i = 1; $i < 11; $i++){
    $result = $num * $i;
    echo "$num X $i = $result \n";
}