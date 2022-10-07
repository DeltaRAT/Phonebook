<?php

function site_url($route){
    return $_ENV['HOST'] . $route;
}

function asset_url($route){
    return site_url('Assets/' . $route);
}

function view($path, $data = []){
    extract($data);
    $path = str_replace('.','/',$path);
    $view_full_path = BASEURL .  "Views/$path.php";
    include_once $view_full_path;
}


