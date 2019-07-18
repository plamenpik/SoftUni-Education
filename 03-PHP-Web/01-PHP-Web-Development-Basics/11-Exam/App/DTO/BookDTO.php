<?php

namespace App\DTO;


class BookDTO
{
    /** @var int */
    private $bookId;

    /** @var string */
    private $title;

    /** @var string */
    private $author;

    /** @var string */
    private $description;

    /** @var string */
    private $image;

    /** @var GenreDTO */
    private $genreId;

    /** @var UserDTO */
    private $userId;

    /** @var string */
    private $addedOn;

    /**
     * @return int
     */
    public function getBookId(): int
    {
        return $this->bookId;
    }

    /**
     * @param int $bookId
     */
    public function setBookId(int $bookId): void
    {
        $this->bookId = $bookId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return GenreDTO
     */
    public function getGenreId(): GenreDTO
    {
        return $this->genreId;
    }

    /**
     * @param $genreId
     */
    public function setGenreId($genreId): void
    {
        $this->genreId = $genreId;
    }

    /**
     * @return UserDTO
     */
    public function getUserId(): UserDTO
    {
        return $this->userId;
    }

    /**
     * @param UserDTO $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getAddedOn(): string
    {
        return $this->addedOn;
    }

    /**
     * @param string $addedOn
     */
    public function setAddedOn(string $addedOn): void
    {
        $this->addedOn = $addedOn;
    }

}