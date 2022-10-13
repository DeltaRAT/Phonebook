<?php
use App\Core\Routing\Route;



Route::get('/','HomeController@index');
Route::post('/contact/add','ContactController@index');
Route::get('contact/delete/{id}','ContactController@delete');






//Route::get('/','HomeController@index');
//Route::get('/archive','ArchiveController@index');
//Route::get('/archive/products','ArchiveController@products');
//Route::get('/archive/articles','ArchiveController@articles');
//Route::get('/post/{slug}','PostController@single');
//Route::get('/post/{slug}/comments/{cid}','PostController@comments');
//Route::get('/todo/list','TodoController@list',[BlockFireFox::class,BlockIE::class]);
//Route::get('/todo/add','TodoController@add');
//Route::get('/todo/remove','TodoController@remove');


