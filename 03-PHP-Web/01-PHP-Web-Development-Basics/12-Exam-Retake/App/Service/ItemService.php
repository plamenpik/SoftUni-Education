<?php

namespace App\Service;


use App\DTO\ItemDTO;
use App\Repository\ItemRepositoryInterface;

class ItemService implements ItemServiceInterface
{
    /** @var ItemRepositoryInterface */
    private $itemRepository;

    /**
     * BookService constructor.
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }


    /**
     * @return \Generator|ItemDTO[]
     *
     */
    public function getAll(): \Generator
    {
        return $this->itemRepository->findAll();
    }

    /**
     * @param int $id
     * @return \Generator|ItemDTO[]
     */
    public function getMyItems(int $id): \Generator
    {
        return $this->itemRepository->findMyItems($id);
    }

    public function getOne(int $id): ItemDTO
    {
        return $this->itemRepository->findOne($id);
    }

    public function addItem(ItemDTO $itemDTO): bool
    {
       return $this->itemRepository->insert($itemDTO);
    }

    public function edit(ItemDTO $itemDTO, int $id): bool
    {
        return $this->itemRepository->update($itemDTO, $id);
    }

    public function delete(int $id): bool
    {
        return $this->itemRepository->remove($id);
    }
}