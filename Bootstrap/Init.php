<?php

define('BASEURL', __DIR__ . "/../");

include BASEURL . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEURL);
$dotenv->load();
