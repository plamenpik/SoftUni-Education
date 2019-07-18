<?php

namespace App\Http;

use App\DTO\ItemDTO;
use App\DTO\EditDTO;
use App\Service\ItemServiceInterface;
use App\Service\CategoryServiceInterface;
use App\Service\UserServiceInterface;
use http\Exception;

class ItemHttpHandler extends HttpHandlerAbstract
{
    public function add(ItemServiceInterface $itemService,
                        UserServiceInterface $userService,
                        CategoryServiceInterface $categoryService,
                        array $formData = [])
    {

        if (isset($formData['add'])) {
            try {
            $this->handleInsertProcess($itemService, $userService, $categoryService, $formData);
            } catch (\Exception $e) {
                $item = $this->dataBinder->bind($formData, ItemDTO::class);
                /** @var EditDTO $editDTO */
                $editDTO = new EditDTO();
                $editDTO->setItem($item);
                $editDTO->setCategory($categoryService->getAll());
                $this->render("items/add_item", $editDTO [$e->getMessage()]);
            }
        } else {
            $item = $this->dataBinder->bind($formData, ItemDTO::class);
            /** @var EditDTO $editDTO */
            $editDTO = new EditDTO();
            $editDTO->setItem($item);
            $editDTO->setCategory($categoryService->getAll());
            $this->render("items/add_item", $editDTO);
        }
    }

    private function handleInsertProcess(ItemServiceInterface $itemService,
                                         UserServiceInterface $userService,
                                         CategoryServiceInterface $categoryService,
                                         array $formData)
    {
        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($formData, ItemDTO::class);
        /** @var UserServiceInterface $userService */
        $user = $userService->currentUser();
        /** @var CategoryServiceInterface $categoryService */
        $category = $categoryService->getOne(intval($formData['category_id']));
        $item->setAuthor($user);
        $item->setCategory($category);
        /** @var ItemServiceInterface $taskService */
        $itemService->addItem($item);
        $this->redirect("my_items.php");
    }

    public function edit(ItemServiceInterface $itemService,
                         UserServiceInterface $userService,
                         CategoryServiceInterface $categoryService,
                         array $formData = [], array $getData = [])
    {
        if (!$userService->isAuthor($itemService, $getData['item_id'])) {
            $this->redirect("my_items.php");
        }
        if (isset($formData['edit'])) {
            try {
            $this->handleEditProcess($itemService, $userService, $categoryService, $formData, $getData);
            } catch (\Exception $e) {
                $item = $itemService->getOne($getData['item_id']);
                /** @var EditDTO $editDTO */
                $editDTO = new EditDTO();
                $editDTO->setItem($item);
                $editDTO->setCategory($categoryService->getAll());
                $this->render("items/edit", $editDTO, [$e->getMessage()]);
            }
        } else {
            $item = $itemService->getOne($getData['item_id']);
            /** @var EditDTO $editDTO */
            $editDTO = new EditDTO();
            $editDTO->setItem($item);
            $editDTO->setCategory($categoryService->getAll());
            $this->render("items/edit", $editDTO);
        }
    }

    private function handleEditProcess(ItemServiceInterface $itemService,
                                       UserServiceInterface $userService,
                                       CategoryServiceInterface $categoryService,
                                       array $formData, array $getData)
    {
        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($formData, ItemDTO::class);
        /** @var UserServiceInterface $userService */
        $user = $userService->currentUser();
        /** @var CategoryServiceInterface $categoryService */
        $category = $categoryService->getOne($formData['category_id']);
        $item->setAuthor($user);
        $item->setCategory($category);
        /** @var ItemServiceInterface $taskService */
        $itemService->edit($item, $getData['item_id']);
        $this->redirect("my_items.php");
    }

    public function delete(ItemServiceInterface $itemService, array $getData = [])
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login.php');
        }

        $itemService->delete($getData['item_id']);
        $this->redirect("my_items.php");
    }
}