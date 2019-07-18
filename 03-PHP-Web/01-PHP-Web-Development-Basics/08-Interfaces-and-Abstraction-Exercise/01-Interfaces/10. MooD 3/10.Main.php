<?php

spl_autoload_register();

[$username, $type, $specialPoints, $level] = explode(' | ', readline());

$demon = new $type($username, $type, $level, $specialPoints);
$demon->getPassword();
$demon->printLevel();
echo $demon;
