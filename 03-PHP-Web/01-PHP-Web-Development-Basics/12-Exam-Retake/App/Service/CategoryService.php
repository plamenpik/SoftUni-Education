<?php

namespace App\Service;


use App\DTO\CategoryDTO;
use App\Repository\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{
    /** @var CategoryRepositoryInterface */
    private $categoryRepository;

    /**
     * GenreService constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function getAll(): \Generator
    {
       return $this->categoryRepository->findAll();
    }

    public function getOne(int $id): CategoryDTO
    {
        return $this->categoryRepository->findOne($id);
    }
}