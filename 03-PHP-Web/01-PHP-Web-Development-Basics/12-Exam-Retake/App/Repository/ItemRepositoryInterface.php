<?php

namespace App\Repository;


use App\DTO\ItemDTO;

interface ItemRepositoryInterface
{
    /**
     * @return \Generator|ItemDTO[]
     */
    public function findAll() : \Generator;

    /**
     * @param int $id
     * @return \Generator|ItemDTO[]
     */
    public function findMyItems(int $id) : \Generator;

    public function findOne(int $id) : ItemDTO;

    public function insert(ItemDTO $itemDTO) : bool;
    public function update(ItemDTO $itemDTO, int $id) : bool;
    public function remove(int $id) : bool;
}