<?php
namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;

use hisorange\BrowserDetect\Parser as Browser;

class BlockIE implements MiddlewareInterface{
    public function handler()
    {
        global $request;
        echo "<hr>Agent :" . $_SERVER['HTTP_USER_AGENT'];
        if (Browser::isIE()){
            die("ha ha, I figure it out,IE!!!");
        }
    }
}
