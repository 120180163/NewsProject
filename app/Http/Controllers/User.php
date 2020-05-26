<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function get_user(){
        $user_id = \request('id');
        return view('userprofiel', compact('user_id'));
}
    public function test(){
        $abc = "khaled";
        $arr = ['usernaem'=>'khaled', 'password'=>123, 'posts'=>['post','post2','post3']];
        return view('test', compact('abc', 'arr'));
    }
}
