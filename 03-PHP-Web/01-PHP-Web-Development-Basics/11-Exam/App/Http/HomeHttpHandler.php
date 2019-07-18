<?php

namespace App\Http;


use App\Service\BookServiceInterface;
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

    public function myBooks (BookServiceInterface $bookService)
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $myBooks = $bookService->getMyBooks($_SESSION['id']);

        $this->render("books/my_books", $myBooks);
    }

    public function allBooks(BookServiceInterface $bookService)
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $allBooks = $bookService->getAll();

        $this->render("books/all_books", $allBooks);
    }

    public function getOne(BookServiceInterface $bookService, array $getData = [])
    {
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $book = $bookService->getOne($getData['book_id']);

        $this->render("books/details", $book);
    }

}