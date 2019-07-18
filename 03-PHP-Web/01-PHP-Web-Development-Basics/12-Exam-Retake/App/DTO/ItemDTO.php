<?php

namespace App\DTO;


class ItemDTO
{
    const TITLE_MIN_LENGTH = 3;
    const TITLE_MAX_LENGTH = 255;

    const PRICE_MIN_LENGTH = 1;
    const PRICE_MAX_LENGTH = 50;

    const DESCRIPTION_MIN_LENGTH = 10;
    const DESCRIPTION_MAX_LENGTH = 10000;

    const IMAGE_MIN_LENGTH = 3;
    const IMAGE_MAX_LENGTH = 255;


    /** @var int */
    private $itemId;

    /** @var string */
    private $title;

    /** @var float */
    private $price;

    /** @var string */
    private $description;

    /** @var string */
    private $image;

    /** @var CategoryDTO */
    private $category;

    /** @var UserDTO */
    private $author;


    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
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
     * @throws \Exception
     */
    public function setTitle(string $title): void
    {
        DTOValidator::validate(
            self::TITLE_MIN_LENGTH,
            self::TITLE_MAX_LENGTH,
            $title,
            'Title must be between ' . self::TITLE_MIN_LENGTH .
            ' and ' . self::TITLE_MAX_LENGTH . ' characters!'
        );
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws \Exception
     */
    public function setPrice(float $price): void
    {
        DTOValidator::validate(
            self::PRICE_MIN_LENGTH,
            self::PRICE_MAX_LENGTH,
            $price,
            'Price must be between ' . self::PRICE_MIN_LENGTH .
            ' and ' . self::PRICE_MIN_LENGTH . ' digits!'
        );
        $this->price = $price;
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
     * @throws \Exception
     */
    public function setDescription(string $description): void
    {
        DTOValidator::validate(
            self::DESCRIPTION_MIN_LENGTH,
            self::DESCRIPTION_MAX_LENGTH,
            $description,
            'Description must be between ' . self::DESCRIPTION_MIN_LENGTH .
            ' and ' . self::DESCRIPTION_MAX_LENGTH . ' characters!'
        );
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
     * @throws \Exception
     */
    public function setImage(string $image): void
    {
        DTOValidator::validate(
            self::IMAGE_MIN_LENGTH,
            self::IMAGE_MAX_LENGTH,
            $image,
            'Image must be between ' . self::IMAGE_MIN_LENGTH .
            ' and ' . self::IMAGE_MAX_LENGTH . ' characters!'
        );
        $this->image = $image;
    }

    /**
     * @return CategoryDTO
     */
    public function getCategory(): CategoryDTO
    {
        return $this->category;
    }

    /**
     * @param $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return UserDTO
     */
    public function getAuthor(): UserDTO
    {
        return $this->author;
    }

    /**
     * @param UserDTO $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }


}