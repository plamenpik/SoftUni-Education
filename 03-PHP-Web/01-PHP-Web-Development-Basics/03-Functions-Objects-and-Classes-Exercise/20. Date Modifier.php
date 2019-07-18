<?php

class DateModifier
{
    private $date1;
    private $date2;

        public function __construct(string $date1, string $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function timeDiffrance() {
        $datetime1 = new DateTime($this->date1);
        $datetime2 = new DateTime($this->date2);
        $interval = date_diff($datetime1, $datetime2);
        echo $interval->format('%a');
    }

}

$dateOne = str_replace(' ', '-', readline());
$dateTwo = str_replace(' ', '-', readline());

$date = new DateModifier($dateOne, $dateTwo);

$date->timeDiffrance();
