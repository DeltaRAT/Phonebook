<?php
# It is FrontController!
include "Bootstrap/Init.php";


$router = new \App\Core\Routing\Router();
$router->run();
