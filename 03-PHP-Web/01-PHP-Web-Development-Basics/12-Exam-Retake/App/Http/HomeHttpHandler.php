<?php

namespace App\Http;


use App\Service\ItemServiceInterface;
use App\Service\UserServiceInterface;

class HomeHttpHandler extends HttpHandlerAbstract
{
    public function index(UserServiceInterface $userService)
    {
        if($userService->isLogged()){
			$currentUser = $userService->currentUser();
            $this->render("users/profile", $currentUser);
        }else{
            $this->render("home/index");
        }
    }

    public function profile(UserServiceInterface $userService)
    {
        $currentUser = $userService->currentUser();

        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $this->render("users/profile", $currentUser);
    }

    public function myItems (ItemServiceInterface $itemService)
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $myItems = $itemService->getMyItems($_SESSION['id']);

        $this->render("items/my_items", $myItems);
    }

    public function allItems(ItemServiceInterface $itemService)
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $allBooks = $itemService->getAll();

        $this->render("items/all_items", $allBooks);
    }

    public function getOne(ItemServiceInterface $itemService, array $getData = [])
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $item = $itemService->getOne($getData['item_id']);

        $this->render("items/details", $item);
    }

}