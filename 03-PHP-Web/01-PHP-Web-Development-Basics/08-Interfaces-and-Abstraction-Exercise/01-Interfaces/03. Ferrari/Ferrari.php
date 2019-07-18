<?php

class Ferrari
{
    /**
     * @var string
     */
    private $driver;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $breaks;

    /**
     * @var string
     */
    private $gas;

    /**
     * Ferrari constructor.
     * @param string $driver
     * @param string $model
     * @param string $breaks
     * @param string $gas
     */
    public function __construct(string $driver, string $model = '488-Spider',
                                string $breaks = 'Brakes!', string $gas = 'Zadu6avam sA!')
    {
        $this->driver = $driver;
        $this->model = $model;
        $this->breaks = $breaks;
        $this->gas = $gas;
    }

    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }

    public function __toString()
    {
        return "{$this->model}/{$this->breaks}/{$this->gas}/{$this->getDriver()}";
    }

}