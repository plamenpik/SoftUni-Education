<?php

namespace App\Service;


use App\DTO\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword) : bool;

    public function login(string $username, string $password) : ?UserDTO;

    public function currentUser() : ?UserDTO;

    public function isLogged() : bool;

    public function isAuthor(BookServiceInterface $bookService, int $bookId): bool;
}