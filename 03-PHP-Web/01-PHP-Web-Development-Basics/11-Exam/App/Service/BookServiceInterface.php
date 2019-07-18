<?php

namespace App\Service;


use App\DTO\BookDTO;

interface BookServiceInterface
{
    /**
     * @return \Generator|BookDTO[]
     *
     */
    public function getAll() : \Generator;

    /**
     * @param int $id
     * @return \Generator|BookDTO[]
     */
    public function getMyBooks(int $id) : \Generator;

    public function getOne(int $id) : BookDTO;

    public function addBook(BookDTO $bookDTO) : bool;
    public function edit(BookDTO $taskDTO, int $id) : bool;
    public function delete(int $id) : bool;
}