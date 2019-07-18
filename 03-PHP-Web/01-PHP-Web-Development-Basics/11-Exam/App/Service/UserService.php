<?php

namespace App\Service;


use App\DTO\UserDTO;
use App\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    /** @var UserRepositoryInterface */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function register(UserDTO $userDTO, string $confirmPassword): bool
    {
        if($userDTO->getPassword() !== $confirmPassword){
            return false;
        }

        if(null !== $this->userRepository->findOneByUsername($userDTO->getUsername())){
            return false;
        }

        $this->encryptPassword($userDTO);

        return $this->userRepository->insert($userDTO);
    }

    public function login(string $username, string $password): ?UserDTO
    {
        $user = $this->userRepository->findOneByUsername($username);

        if(null == $user){
            throw new \Exception("Username not found!");
        }

        $userPasswordHash = $user->getPassword();

        if(false === password_verify($password, $userPasswordHash)){
            throw new \Exception("Invalid password!");
        }

        return $user;
    }

    public function currentUser(): ?UserDTO
    {
        if(!isset($_SESSION['id'])) {
            return null;
        }
        return $this->userRepository->findOneById($_SESSION['id']);
    }

    public function isLogged(): bool
    {
        if (!isset($_SESSION['id'])) {
            return false;
        }
        return true;
    }

    public function isAuthor(BookServiceInterface $bookService, int $bookId): bool
    {
        if ($bookService->getOne($bookId)->getUserId()->getUserId() != $this->currentUser()->getUserId()) {
            return false;
        }
        return true;
    }

    /**
     * @param UserDTO $userDTO
     * @throws \Exception
     */
    private function encryptPassword(UserDTO $userDTO): void
    {
        $plainPassword = $userDTO->getPassword();
        $passwordHash = password_hash($plainPassword, PASSWORD_DEFAULT);
        $userDTO->setPassword($passwordHash);
    }
}