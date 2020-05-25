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

Route::get('userprofiel/{name}/{id}', function($name,$id){
    return view('userprofiel', compact('name', 'id'));
});

Route::get('user/{id}','User@get_user');

Route::get('test/', 'User@test');
