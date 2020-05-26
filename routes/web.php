<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('userprofiel/{name}/{id}', function($name,$id){
//    return view('userprofiel', compact('name', 'id'));
//});
//
//Route::get('user/{id}','User@get_user');
//
//Route::get('test/', 'User@test');


Route::get("all_news","NewsController@get_all_news")->name('all_news');


Route::get('news/{news_id}', 'NewsController@get_news')->name("news");

Route::post('add_news',"NewsController@add_news")->name("add_news");

Route::get('delete_news/{id}',"NewsController@delete_news")-> where("id","[0-9]+")->name("delete_news");
Route::get('soft_delete_news/{id}',"NewsController@soft_delete_news")-> where("id","[0-9]+")->name("soft_delete_news");
