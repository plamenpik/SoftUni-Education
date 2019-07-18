<?php

$nums = explode(' ', readline());

$counter = array_fill(0, 65535, 0);

for ($i = 0; $i < count($nums); $i++) {
    $counter[$nums[$i]]++;
}

$max = max($counter);

for ($i = 0; $i < count($nums); $i++) {
    if ($counter[$nums[$i]] == $max) {
        echo ($nums[$i]);
        break;
    }
}