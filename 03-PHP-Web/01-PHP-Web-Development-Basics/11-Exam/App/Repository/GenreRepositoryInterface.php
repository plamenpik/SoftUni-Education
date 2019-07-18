<?php

namespace App\Repository;


use App\DTO\GenreDTO;

interface GenreRepositoryInterface
{
    public function findAll(): \Generator;

    public function findOne(int $id): GenreDTO;
}