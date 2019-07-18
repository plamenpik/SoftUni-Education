<?php

class Boxx
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
     * @throws
     */
    public function __construct(float $length, float $width, float $height)
    {
        try {
            $this->setLength($length);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
        try {
            $this->setWidth($width);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
        try{
        $this->setHeight($height);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
    }

    /**
     * @param float $length
     * @throws
     */
    private function setLength(float $length): void
    {
        if ($length < 1) {
            throw new Exception('Length cannot be zero or negative.');
        } else {
            $this->length = $length;
        }
    }

    /**
     * @param float $width
     * @throws
     */
    private function setWidth(float $width): void
    {
        if ($width < 1) {
            throw new Exception('Width cannot be zero or negative.');
        } else {
            $this->width = $width;
        }
    }

    /**
     * @param float $height
     * @throws
     */
    private function setHeight(float $height): void
    {
        if ($height < 1) {
            throw new Exception('Height cannot be zero or negative.');
        } else {
            $this->height = $height;
        }
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