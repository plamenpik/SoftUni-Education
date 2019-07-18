<?php

spl_autoload_register();

$author = readline();
$title = readline();
$price = floatval(readline());
$bookType = readline();
$classType = '';
$book = null;

try {
    switch ($bookType) {
        case 'STANDARD':
            $classType = 'Book';
            $book = new $classType($author, $title, $price);
            echo "OK\n" . $book->getPrice();
            break;
        case 'GOLD':
            $classType = 'GoldenEditionBook';
            $book = new $classType($author, $title, $price);
            echo "OK\n" . $book->IncreasePrice();
            break;
        default:
            echo 'Type is not valid!';
            break;
}
} catch (Exception $ex) {
    echo $ex->getMessage();
}