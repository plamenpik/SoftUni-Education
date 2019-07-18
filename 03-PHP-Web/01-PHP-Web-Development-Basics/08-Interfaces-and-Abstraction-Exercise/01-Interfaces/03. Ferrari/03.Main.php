<?php

spl_autoload_register();

$driver = readline();

$car = new Ferrari($driver);

echo $car;