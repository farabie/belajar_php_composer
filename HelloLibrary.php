<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \BieProject\Library\Customer("Abie");
echo $customer->sayHello("Cembul") . PHP_EOL;

?>