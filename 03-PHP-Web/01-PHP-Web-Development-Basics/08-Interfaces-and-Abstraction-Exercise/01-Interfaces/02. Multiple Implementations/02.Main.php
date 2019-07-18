<?php

spl_autoload_register();

$name = readline();
$age = intval(readline());
$id = readline();
$birthDay = readline();

$citizen = new Citizen($name, $age, $id, $birthDay);

echo $citizen;