<?php
namespace App\Utilities;

class Url{

    public static function current()
    {
       return $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    public static function current_uri()
    {
        return strtok($_SERVER['REQUEST_URI'],'?');
    }
}
