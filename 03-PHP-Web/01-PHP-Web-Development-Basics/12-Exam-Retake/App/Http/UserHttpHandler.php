<?php

namespace App\Http;


use App\DTO\UserDTO;
use App\Service\UserServiceInterface;

class UserHttpHandler extends HttpHandlerAbstract
{
    /**
     * @param UserServiceInterface $userService
     * @param array $formData
     */
    public function registerUser(UserServiceInterface $userService,
                                 array $formData = [])
    {
        if (isset($formData['register'])) {
            try {
            $this->handlerRegisterProcess($userService, $formData);
            } catch (\Exception $e) {
                $user = $this->dataBinder->bind($formData, UserDTO::class);
                $this->render("users/register", $user, [$e->getMessage()]);
            }
        } else {
            $this->render("users/register");
        }
    }

    /**
     * @param UserServiceInterface $userService
     * @param array $formData
     */
    private function handlerRegisterProcess(UserServiceInterface $userService,
                                            array $formData): void
    {
        /** @var UserDTO $user */
        $user = $this->dataBinder->bind($formData, UserDTO::class);
        if ($userService->register($user, $formData['confirm_password'])) {
            $this->render("users/login", null,
                ["<p style='color: green'>Congratulations, {$formData['full_name']}. Login our platform</p>"]);
        }

    }

    public function login(UserServiceInterface $userService,
                          array $formData = [])
    {
        if (isset($formData['login'])) {
            $this->handlerLoginProcess($userService, $formData);
        } else {
            $this->render("users/login");
        }
    }

    private function handlerLoginProcess(UserServiceInterface $userService, array $formData): void
    {
        try {
            $currentUser = $userService->login($formData['username'], $formData['password']);
            $_SESSION['id'] = $currentUser->getUserId();
            $this->redirect("profile.php");
        } catch (\Exception $ex) {
            $user = $this->dataBinder->bind($formData, UserDTO::class);
            $this->render("users/login", $user, [$ex->getMessage()]);
        }
    }
}