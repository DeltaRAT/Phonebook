<?php
use App\Core\Routing\Route;
use App\Middleware\BlockFireFox;
use App\Middleware\BlockIE;

Route::get('/','HomeController@index');
Route::get('/archive','ArchiveController@index');
Route::get('/archive/products','ArchiveController@products');
Route::get('/archive/articles','ArchiveController@articles');

Route::get('/todo/list','TodoController@list',[BlockFireFox::class,BlockIE::class]);

Route::get('/todo/add','TodoController@add');
Route::get('/todo/remove','TodoController@remove');

Route::add(['get','post'],'/a',function(){
    echo "welcome";
});



Route::get('/b',function (){
    echo "save OK";
});
Route::put('/c',['Controller','Method']);

Route::get('/d','Conroller@Method');

