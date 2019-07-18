<?php
spl_autoload_register();

$numbers = explode(' ', readline());
$urls = explode(' ', readline());

for ($i = 0; $i < count($numbers); $i++) {
    try {
        $gsm = new SmartPhone($numbers[$i]);
        $gsm->makeCall();
    } catch (Exception $ex) {
        echo $ex->getMessage() . PHP_EOL;
        continue;
    }
}

for ($i = 0; $i < count($urls); $i++) {
    try {
        $gsm1 = new SmartPhone('088', $urls[$i]);
        $gsm1->browse();
    } catch (Exception $ex) {
        echo $ex->getMessage() . PHP_EOL;
        continue;
    }
}
