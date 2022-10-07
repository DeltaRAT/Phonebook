<?php

namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;

use hisorange\BrowserDetect\Parser as Browser;

Class BlockFireFox implements MiddlewareInterface
{
    public function handler()
    {
        global $request;
        if (Browser::isFireFox()){
            die('Your Browser is illegal,FireFox!');
        }
    }
}