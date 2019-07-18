<?php

namespace App\Repository;


use App\DTO\GenreDTO;

class GenreRepository extends RepositoryAbstract implements GenreRepositoryInterface
{

    /**
     * @return \Generator|GenreDTO[]
     */
    public function findAll(): \Generator
    {
       return $this->db->query("
            SELECT genres_id AS genreId, name
            FROM genres
        ")
            ->execute()
            ->fetch(GenreDTO::class);
    }

    public function findOne(int $id): GenreDTO
    {
        return $this->db->query("
            SELECT genres_id AS genreId, name
            FROM genres
            WHERE genres_id = ?
        ")
            ->execute([$id])
            ->fetch(GenreDTO::class)
            ->current();
    }
}