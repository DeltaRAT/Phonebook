<?php
namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;

class GlobalMiddleware implements MiddlewareInterface {

    public function handler(){

        $this->sanitizeGetParam();
    }

    public function sanitizeGetParam(){
        foreach ($_GET as $key => $value){
            $_GET[$key] = xss_clean($value);
        }
    }
}
