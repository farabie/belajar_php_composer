<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Abie Project");
$log->pushHandler(new StreamHandler("log_author.log", Logger::INFO));

$log->info("Hello World");
$log->info("Ini adalah log author")


?>