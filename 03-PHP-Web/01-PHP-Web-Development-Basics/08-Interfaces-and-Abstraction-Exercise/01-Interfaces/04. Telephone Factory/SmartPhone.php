<?php

class SmartPhone implements Calling, Browsing
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $url;

    /**
     * SmartPhone constructor.
     * @param string $number
     * @param string $url
     * @throws Exception
     */
    public function __construct(string $number = '', string $url = '')
    {
        $this->setNumber($number);
        $this->setUrl($url);
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @throws Exception
     */
    public function setNumber(string $number): void
    {
        if (!is_numeric($number)) {
            throw new Exception('Invalid number!');
        }
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @throws Exception
     */
    public function setUrl(string $url): void
    {
        if (preg_match('/\\d/', $url) > 0) {
            throw new Exception('Invalid URL!');
        }
        $this->url = $url;
    }

    public function makeCall(): void
    {
        echo 'Calling... ' . $this->getNumber() . PHP_EOL;
    }

    public function browse(): void
    {
        echo 'Browsing: ' . $this->getUrl() . '!' . PHP_EOL;
    }
}