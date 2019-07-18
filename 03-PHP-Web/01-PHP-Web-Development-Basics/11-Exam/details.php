<?php

require_once 'common.php';

$bookRepository = new \App\Repository\BookRepository($db, $dataBinder);
$bookService = new \App\Service\BookService($bookRepository);
$homeHttpHandler = new \App\Http\HomeHttpHandler($template, $dataBinder);
$homeHttpHandler->getOne($bookService, $_GET);