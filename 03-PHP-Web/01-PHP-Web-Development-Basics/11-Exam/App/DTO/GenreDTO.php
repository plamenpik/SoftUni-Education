<?php

namespace App\DTO;


use App\DTO\DTOValidator;

class GenreDTO
{
    const GENRE_NAME_MIN_LENGTH = 5;
    const GENRE_NAME_MAX_LENGTH = 50;

    /** @var int */
    private $genreId;

    /** @var string */
    private $name;

    /**
     * @return int
     */
    public function getGenreId(): int
    {
        return $this->genreId;
    }

    /**
     * @param int $genreId
     */
    public function setGenreId(int $genreId): void
    {
        $this->genreId = $genreId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {

        return $this->name;
    }

    /**
     * @param string $name
     * @throws \Exception
     */
    public function setName(string $name): void
    {
        DTOValidator::validate(
            self::GENRE_NAME_MIN_LENGTH,
            self::GENRE_NAME_MAX_LENGTH,
            $name,
            "Genre name out of range"
        );
        $this->name = $name;
    }
}