<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUserName(){
        return view("user");
    }
    function getAboutUser(){
        return "Chowa Swe";
    }
    function getUserNameid(){
        return "Hello this is " .$name;
    }

    // view calling

    function userHome(){
        $name="Chowa";
        $users =['chowa','arfin','afrin','Moriom'];
        return view('home',['name'=>$name,'users'=>$users]);
    }
    function userAbout($name){
        return view('about',['user'=>$name]);
    }
    function adminLogin(){
        // if(View::exists('admin.login')){
        //     return view('admin.login');
        // }else{
        //     echo 'no view found';
        // }
        return view('admin.login');
    }
}
  

