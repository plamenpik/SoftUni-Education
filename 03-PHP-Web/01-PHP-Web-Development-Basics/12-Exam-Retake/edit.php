<?php

require_once 'common.php';

$itemHttpHandler = new \App\Http\ItemHttpHandler($template, $dataBinder);
$itemRepository = new \App\Repository\ItemRepository($db, $dataBinder);
$itemService = new \App\Service\ItemService($itemRepository);

$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);

$categoryRepository = new \App\Repository\CategoryRepository($db);
$categoryService = new \App\Service\CategoryService($categoryRepository);

$itemHttpHandler->edit($itemService, $userService, $categoryService, $_POST, $_GET);