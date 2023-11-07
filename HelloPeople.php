<?php 

require_once __DIR__ . "/vendor/autoload.php";

use AbieProject\Data\People;

$people = new People("Farabie");

echo $people->sayHello("Abie") . PHP_EOL;


?>