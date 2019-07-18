<?php

class DecimalNumber
{
    public $num;

    function reverseNumber()
    {
        $reversed = $this->num;
        for ($i = 0; $i < strlen($reversed) / 2; $i++) {
            $temp = '';
            $temp = $reversed[$i];
            $reversed[$i] = $reversed[strlen($reversed) - 1 - $i];
            $reversed[strlen($reversed) - 1 - $i] = $temp;
        }
        echo $reversed;
    }
}

$input = readline();
$decimalNum = new DecimalNumber();
$decimalNum->num = $input;
$decimalNum->reverseNumber();