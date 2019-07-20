<?php

$num = intval(fgets(STDIN));
$start = intval(fgets(STDIN));

if ($start > 10){
    $multy = $num * $start;
    echo "$num X $start = $multy";
    return;
}
for ($i = $start; $i < 11; $i++){
    $result = $num * $i;
    echo "$num X $i = $result \n";
}