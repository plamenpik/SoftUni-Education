<?php

class GoldenEditionBook extends Book
{
    public function IncreasePrice():float
    {
        return $this->getPrice() * 1.3;
    }
}