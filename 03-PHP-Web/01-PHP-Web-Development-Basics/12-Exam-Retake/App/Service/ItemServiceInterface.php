<?php

namespace App\Service;


use App\DTO\ItemDTO;

interface ItemServiceInterface
{
    /**
     * @return \Generator|ItemDTO[]
     *
     */
    public function getAll() : \Generator;

    /**
     * @param int $id
     * @return \Generator|ItemDTO[]
     */
    public function getMyItems(int $id) : \Generator;

    public function getOne(int $id) : ItemDTO;

    public function addItem(ItemDTO $itemDTO) : bool;
    public function edit(ItemDTO $itemDTO, int $id) : bool;
    public function delete(int $id) : bool;
}