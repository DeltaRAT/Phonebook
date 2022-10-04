<?php
namespace App\Core;

use App\Utilities\Url;

class StupidRouter{
    private $routes;

    public function __Construct(){

        $this->routes = [
            '/colors/green' => 'Views/Colors/green.php',
            '/colors/blue' => 'Views/Colors/blue.php',
            '/colors/red' => 'Views/Colors/red.php'
        ];
    }
    public function run(){
        $current_route = Url::current_uri();
        foreach($this->routes as $route => $view){
            if ($current_route == $route){
                $this->includeViewAndDie(BASEURL . $view);
            }
        }
        #404 Header
        header("HTTP/1.0 404 Not Found");
        $this->includeViewAndDie(BASEURL . "Views/errors/404.php");
    }
    private function includeViewAndDie($viewPath){
        include $viewPath;
        die();
}
}
