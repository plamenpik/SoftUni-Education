<?php

require_once 'common.php';

$itemHttpHandler = new \App\Http\ItemHttpHandler($template, $dataBinder);
$itemRepository = new \App\Repository\ItemRepository($db, $dataBinder);
$itemService = new \App\Service\ItemService($itemRepository);

$itemHttpHandler->delete($itemService, $_GET);