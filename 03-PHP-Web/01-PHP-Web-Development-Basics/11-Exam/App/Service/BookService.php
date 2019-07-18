<?php

namespace App\Service;


use App\DTO\BookDTO;
use App\Repository\BookRepositoryInterface;

class BookService implements BookServiceInterface
{
    /** @var BookRepositoryInterface */
    private $bookRepository;

    /**
     * BookService constructor.
     * @param BookRepositoryInterface $bookRepository
     */
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }


    /**
     * @return \Generator|BookDTO[]
     *
     */
    public function getAll(): \Generator
    {
        return $this->bookRepository->findAll();
    }

    /**
     * @param int $id
     * @return \Generator|BookDTO[]
     */
    public function getMyBooks(int $id): \Generator
    {
        return $this->bookRepository->findMyBooks($id);
    }

    public function getOne(int $id): BookDTO
    {
        return $this->bookRepository->findOne($id);
    }

    public function addBook(BookDTO $bookDTO): bool
    {
       return $this->bookRepository->insert($bookDTO);
    }

    public function edit(BookDTO $bookDTO, int $id): bool
    {
        return $this->bookRepository->update($bookDTO, $id);
    }

    public function delete(int $id): bool
    {
        return $this->bookRepository->remove($id);
    }
}