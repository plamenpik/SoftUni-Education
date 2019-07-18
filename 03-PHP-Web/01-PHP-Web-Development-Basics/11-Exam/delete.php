<?php

require_once 'common.php';

$bookHttpHandler = new \App\Http\BookHttpHandler($template, $dataBinder);
$bookRepository = new \App\Repository\BookRepository($db, $dataBinder);
$bookService = new \App\Service\BookService($bookRepository);

$bookHttpHandler->delete($bookService, $_GET);