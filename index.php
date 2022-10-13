<?php
# It is FrontController!
use App\Models\User;
include "Bootstrap/Init.php";




#############################################################################################

$router = new \App\Core\Routing\Router();
$router->run();



################################################################################################

