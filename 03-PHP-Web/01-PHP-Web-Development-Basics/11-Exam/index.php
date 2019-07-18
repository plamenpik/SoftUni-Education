<?php

require_once "common.php";

$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);
$homeHttpHandler = new \App\Http\HomeHttpHandler($template, $dataBinder);
$homeHttpHandler->index($userService);
