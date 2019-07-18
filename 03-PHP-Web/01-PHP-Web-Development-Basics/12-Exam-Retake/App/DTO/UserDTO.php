<?php

namespace App\DTO;

class UserDTO
{
    const NAME_AND_PASS_MIN_LENGTH = 4;
    const FULL_NAME_MIN_LENGTH = 5;
    const LOCATION_MIN_LENGTH = 4;
    const PHONE_MIN_LENGTH = 6;
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
    private $location;

    /** @var string */
    private $phone;

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
            'Username must be between ' . self::NAME_AND_PASS_MIN_LENGTH .
            ' and ' . self::FIELD_MAX_LENGTH . 'characters!'
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
            'Password must be between ' . self::NAME_AND_PASS_MIN_LENGTH .
            ' and ' . self::FIELD_MAX_LENGTH . ' characters!'
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
            'Full name must be between ' . self::FULL_NAME_MIN_LENGTH .
            ' and ' . self::FIELD_MAX_LENGTH . ' characters!'
        );
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @throws \Exception
     */
    public function setLocation(string $location): void
    {
        DTOValidator::validate(
            self::LOCATION_MIN_LENGTH,
            self::FIELD_MAX_LENGTH,
            $location,
            'Location must be between ' . self::LOCATION_MIN_LENGTH .
            ' and ' . self::FIELD_MAX_LENGTH . ' characters!'
        );
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @throws \Exception
     */
    public function setPhone(string $phone): void
    {
        DTOValidator::validate(
            self::PHONE_MIN_LENGTH,
            self::FIELD_MAX_LENGTH,
            $phone,
            'Phone must be between ' . self::NAME_AND_PASS_MIN_LENGTH .
            ' and ' . self::FIELD_MAX_LENGTH . ' characters!'
        );
        $this->phone = $phone;
    }
}