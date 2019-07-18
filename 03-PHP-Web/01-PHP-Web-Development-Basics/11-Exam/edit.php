<?php

require_once 'common.php';

$bookHttpHandler = new \App\Http\BookHttpHandler($template, $dataBinder);
$bookRepository = new \App\Repository\BookRepository($db, $dataBinder);
$bookService = new \App\Service\BookService($bookRepository);

$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);

$genreRepository = new \App\Repository\GenreRepository($db);
$genreService = new \App\Service\GenreService($genreRepository);

$bookHttpHandler->edit($bookService, $userService, $genreService, $_POST, $_GET);