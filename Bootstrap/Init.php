<?php

use App\Core\Request;

define('BASEURL',__DIR__ . "/../");

include BASEURL . "vendor/autoload.php";
include BASEURL . "Helpers/helper.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEURL);
$dotenv->load();

$request = new Request();


include BASEURL . "Routes/web.php";

