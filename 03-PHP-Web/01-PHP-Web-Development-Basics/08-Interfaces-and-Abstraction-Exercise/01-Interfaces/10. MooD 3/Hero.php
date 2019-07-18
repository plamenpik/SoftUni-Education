<?php

abstract class Hero
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    private $level;

    /**
     * Hero constructor.
     * @param string $username
     * @param string $type
     * @param int $level
     */
    public function __construct(string $username, string $type, int $level)
    {
        $this->setUsername($username);
        $this->setType($type);
        $this->setLevel($level);
        $this->setPassword();
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @throws Exception
     */
    private function setUsername(string $username): void
    {
        if ($username > 10) {
            throw new Exception();
        }
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    private function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public abstract function setPassword(): void;
    public abstract function printLevel(): string;

    public function __toString()
    {
        return "\"{$this->getUsername()}\" | \"{$this->getPassword()}\" -> {$this->getType()}\n{$this->printLevel()}";
    }
}