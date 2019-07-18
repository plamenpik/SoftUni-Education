<?php

namespace App\DTO;

class UserDTO
{
    const NAME_AND_PASS_MIN_LENGTH = 4;
    const FULL_NAME_MIN_LENGTH = 5;
    const FIELD_MAX_LENGTH = 255;

    /** @var int */
    private $userId;

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $fullName;

    /** @var string */
    private $bornOn;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
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
     * @throws \Exception
     */
    public function setUsername(string $username): void
    {
        DTOValidator::validate(
            self::NAME_AND_PASS_MIN_LENGTH,
            self::FIELD_MAX_LENGTH,
            $username,
            "Username out of range"
        );
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
     * @param string $password
     * @throws \Exception
     */
    public function setPassword(string $password): void
    {
        DTOValidator::validate(
            self::NAME_AND_PASS_MIN_LENGTH,
            self::FIELD_MAX_LENGTH,
            $password,
            "Password out of range"
        );
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @throws \Exception
     */
    public function setFullName(string $fullName): void
    {
        DTOValidator::validate(
            self::FULL_NAME_MIN_LENGTH,
            self::FIELD_MAX_LENGTH,
            $fullName,
            "Full name out of range"
        );
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getBornOn(): string
    {
        return $this->bornOn;
    }

    /**
     * @param string $bornOn
     */
    public function setBornOn(string $bornOn): void
    {
        $this->bornOn = $bornOn;
    }

}