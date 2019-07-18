<?php

$num = intval(fgets(STDIN));
$sum = 0;
$count = 0;

for ($i = 1; $i <= 100; $i++){
    if ($i % 2 != 0) {
        echo "$i \n";
        $sum += $i;
        $count++;
        if ($count == $num){
            break;
        }
    }
}
echo "Sum: $sum";