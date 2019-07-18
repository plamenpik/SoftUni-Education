<?php

namespace App\Http;

use App\DTO\BookDTO;
use App\DTO\EditDTO;
use App\Service\BookServiceInterface;
use App\Service\GenreServiceInterface;
use App\Service\UserServiceInterface;

class BookHttpHandler extends HttpHandlerAbstract
{
    public function add(BookServiceInterface $bookService,
                        UserServiceInterface $userService,
                        GenreServiceInterface $genreService,
                        array $formData = [])
    {

        if (isset($formData['add'])) {
            $this->handleInsertProcess($bookService, $userService, $genreService, $formData);
        } else {
            $book = $this->dataBinder->bind($formData, BookDTO::class);
            /** @var EditDTO $editDTO */
            $editDTO = new EditDTO();
            $editDTO->setBook($book);
            $editDTO->setGenre($genreService->getAll());
            $this->render("books/add_book", $editDTO);
        }
    }

    private function handleInsertProcess(BookServiceInterface $bookService,
                                         UserServiceInterface $userService,
                                         GenreServiceInterface $genreService,
                                         array $formData)
    {
        //var_dump($formData); exit;
        /** @var BookDTO $book */
        $book = $this->dataBinder->bind($formData, BookDTO::class);
        /** @var UserServiceInterface $userService */
        $user = $userService->currentUser();
        /** @var GenreServiceInterface $genreService */
        $genre = $genreService->getOne(intval($formData['genre_id']));
        $book->setUserId($user);
        $book->setGenreId($genre);
        /** @var BookServiceInterface $taskService */
        $bookService->addBook($book);
        $this->redirect("my_books.php");
    }

    public function edit(BookServiceInterface $bookService,
                         UserServiceInterface $userService,
                         GenreServiceInterface $genreService,
                         array $formData = [], array $getData = [])
    {
        if (!$userService->isAuthor($bookService, $getData['book_id'])) {
            $this->redirect("my_books.php");
        }
        if (isset($formData['edit'])) {
            $this->handleEditProcess($bookService, $userService, $genreService, $formData, $getData);
        } else {
            $book = $bookService->getOne($getData['book_id']);
            /** @var EditDTO $editDTO */
            $editDTO = new EditDTO();
            $editDTO->setBook($book);
            $editDTO->setGenre($genreService->getAll());
            $this->render("books/edit", $editDTO);
        }
    }

    private function handleEditProcess(BookServiceInterface $bookService,
                                       UserServiceInterface $userService,
                                       GenreServiceInterface $genreService,
                                       array $formData, array $getData)
    {
        /** @var BookDTO $book */
        $book = $this->dataBinder->bind($formData, BookDTO::class);
        /** @var UserServiceInterface $userService */
        $user = $userService->currentUser();
        /** @var GenreServiceInterface $genreService */
        $genre = $genreService->getOne(intval($formData['genre_id']));
        $book->setUserId($user);
        $book->setGenreId($genre);
        /** @var BookServiceInterface $taskService */
        $bookService->edit($book, $getData['book_id']);
        $this->redirect("my_books.php");
    }

    public function delete(BookServiceInterface $bookService, array $getData = [])
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('login.php');
        }

        $bookService->delete($getData['book_id']);
        $this->redirect("my_books.php");
    }
}