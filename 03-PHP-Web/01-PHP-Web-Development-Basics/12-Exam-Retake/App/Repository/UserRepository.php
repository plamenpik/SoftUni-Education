<?php

namespace App\Repository;


use App\DTO\UserDTO;

class UserRepository extends RepositoryAbstract implements UserRepositoryInterface
{

    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query("
        INSERT INTO users(username, password, full_name, location, phone)
            VALUES (?, ?, ?, ?, ?)
        ")->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getFullName(),
            $userDTO->getLocation(),
            $userDTO->getPhone()
        ]);

        return true;
}

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, 
                   full_name AS fullName, location, phone
            FROM users
            WHERE username = ?
        ")->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, 
                   full_name AS fullName, location, phone
            FROM users
            WHERE user_id = ?
        ")->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }
}