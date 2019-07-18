<?php

namespace App\Service;


use App\DTO\CategoryDTO;

interface CategoryServiceInterface
{
    public function getAll(): \Generator;

    public function getOne(int $id): CategoryDTO;
}