<?php

require_once 'common.php';

$homeHttpHandler = new \App\Http\HomeHttpHandler($template, $dataBinder);
$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);
$homeHttpHandler->profile($userService);