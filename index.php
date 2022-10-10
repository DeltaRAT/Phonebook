<?php
# It is FrontController!
use App\Models\User;
include "Bootstrap/Init.php";



//    $user_data = [
//        //'id' => rand(1,50),
//        'name' => 'amirhossein' . rand(1,100),
//        'email' => 'rasti**@yahoo.com',
//        'password' => 'pass' . rand(1,1000)
//    ];
//
//$userModel = new User();
//$user = $userModel->sum('id',['id[>]'=> 1]);
//nice_dump($user);
#############################################################
//$productModel = new \App\Models\Product();
//$product = $productModel->find(2083);
//nice_dump($product);
#############################################################################################

$router = new \App\Core\Routing\Router();
$router->run();



################################################################################################
//$route_pattern = "/^\/post\/(?<slug>[-%\w]+)$/";
//$route = '/post/{slug}';
//$pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route) . "$/";
//nice_dump($route);
//nice_dump($pattern);
//nice_dump($route_pattern);

//$uri1 ='/post/what-is-post';
//$uri2 = '/post/what-is-php';
//$uri3 = "/post/what-is-php";
//
//$results = preg_match($route_pattern,$uri1,$matches);
//
//nice_dump($matches);
//nice_dump($results);
