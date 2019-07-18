<?php

class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateSurfaceArea(): float
    {
        return 2 * ($this->length * $this->width) + 2 * ($this->length * $this->height) + 2 * ($this->width * $this->height);
    }

    public function calculateLateralSurfaceArea(): float
    {
        return 2 * ($this->length * $this->height) + 2 * ($this->width * $this->height);
    }

    public function calculateVolume(): float
    {
        return $this->length * $this->height * $this->width;
    }
}