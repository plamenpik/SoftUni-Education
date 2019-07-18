<?php

namespace App\Repository;


use App\DTO\CategoryDTO;

class CategoryRepository extends RepositoryAbstract implements CategoryRepositoryInterface
{

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function findAll(): \Generator
    {
       return $this->db->query("
            SELECT category_id AS categoryId, name
            FROM categories
        ")
            ->execute()
            ->fetch(CategoryDTO::class);
    }

    public function findOne(int $id): CategoryDTO
    {
        return $this->db->query("
            SELECT category_id AS categoryId, name
            FROM categories
            WHERE category_id = ?
        ")
            ->execute([$id])
            ->fetch(CategoryDTO::class)
            ->current();
    }
}