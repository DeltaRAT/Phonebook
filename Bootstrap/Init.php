<?php

use App\Core\Request;

define('BASEURL',__DIR__ . "/../");

include BASEURL . "vendor/autoload.php";


$dotenv = Dotenv\Dotenv::createImmutable(BASEURL);
$dotenv->load();

$request = new Request();

include BASEURL . "Helpers/helper.php";
include BASEURL . "Routes/web.php";

