<?php

namespace App\DTO;


class CategoryDTO
{
    const CATEGORY_NAME_MIN_LENGTH = 3;
    const CATEGORY_NAME_MAX_LENGTH = 50;

    /** @var int */
    private $categoryId;

    /** @var string */
    private $name;

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
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
            self::CATEGORY_NAME_MIN_LENGTH,
            self::CATEGORY_NAME_MAX_LENGTH,
            $name,
            'Category must be between ' . self::CATEGORY_NAME_MIN_LENGTH .
            ' and ' . self::CATEGORY_NAME_MAX_LENGTH . ' characters!'
        );
        $this->name = $name;
    }
}