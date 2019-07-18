<?php

require_once 'common.php';

$itemRepository = new \App\Repository\ItemRepository($db, $dataBinder);
$itemService = new \App\Service\ItemService($itemRepository);
$homeHttpHandler = new \App\Http\HomeHttpHandler($template, $dataBinder);
$homeHttpHandler->myItems($itemService);