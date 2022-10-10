<?php
namespace App\Controllers;

use App\Models\User;

class PostController{
    public function single(){
        global $request;

        $author_id = 10;
        $user = (new User($author_id));
        $user->name = 'abfzl';
        $user->email = 'abfzl@yahoo.com';
        var_dump($user->save()->name);

        $slug = $request->get_route_param('slug');
        echo "slug: $slug";
    }
    public function comments(){
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug <br> Comment_id = $cid";
    }
}
