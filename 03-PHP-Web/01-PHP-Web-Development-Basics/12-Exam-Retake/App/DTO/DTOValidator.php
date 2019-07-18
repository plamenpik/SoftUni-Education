<?php

namespace App\DTO;


class DTOValidator
{
    /**
     * @param int $min
     * @param int $max
     * @param $value
     * @param $errorMessage
     * @throws \Exception
     */
    public static function validate($min, $max, $value, $errorMessage)
    {
        if (mb_strlen($value) < $min
            || mb_strlen($value) > $max) {
            throw new \Exception($errorMessage);
        }
    }
}