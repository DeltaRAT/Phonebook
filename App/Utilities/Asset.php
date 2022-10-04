<?php
namespace App\Utilities;

class Asset{

    public static function get(string $route)
    {
        return $_ENV['HOST'] . "/Asset/" . $route;
    }
    public static function css(string $route)
    {
        return $_ENV['HOST'] . "/Asset/css/" . $route;
    }
    public static function font(string $route)
    {
        return $_ENV['HOST'] . "/Asset/font/" . $route;
    }
    public static function img(string $route)
    {
        return $_ENV['HOST'] . "/Asset/img/" . $route;
    }
    public static function JS(string $route)
    {
        return $_ENV['HOST'] . "/Asset/JS/" . $route;
    }

}
// TAMRIN : Refactoring with magic method!