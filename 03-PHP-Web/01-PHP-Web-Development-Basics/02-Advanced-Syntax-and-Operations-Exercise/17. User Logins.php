<?php

$input = readline();
$login = [];

while ($input != 'login') {
    $splited = explode(' -> ', $input);
    $user = $splited[0];
    $pass = $splited[1];
    if (!array_key_exists($user, $login)) {
        $login[$user] = '';
    }
    $login[$user] = $pass;
    $input = readline();
}

$input = readline();
$failedLogin = 0;

while ($input != 'end') {
    $splited = explode(' -> ', $input);
    $user = $splited[0];
    $pass = $splited[1];

    if (array_key_exists($user, $login)) {
        if ($login[$user] == $pass) {
            echo "$user: logged in successfully" . PHP_EOL;
        } else {
            echo "$user: login failed" . PHP_EOL;
            $failedLogin++;
        }
    } else {
        echo "$user: login failed" . PHP_EOL;
        $failedLogin++;
    }
    $input = readline();
}
echo "unsuccessful login attempts: $failedLogin";