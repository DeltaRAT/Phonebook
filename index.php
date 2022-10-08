<?php
# It is FrontController!
include "Bootstrap/Init.php";


$router = new \App\Core\Routing\Router();
$router->run();

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
