<?php

namespace App\Repository;


use App\DTO\CategoryDTO;

interface CategoryRepositoryInterface
{
    public function findAll(): \Generator;

    public function findOne(int $id): CategoryDTO;
}