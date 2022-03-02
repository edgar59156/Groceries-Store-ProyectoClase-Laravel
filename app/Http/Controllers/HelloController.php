<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello3(){
        return "<h3> Hello world 3  xd </h3>";
    }
    public function hello4(){
        return view('hello.hello4');
    }
    public function hello5($firstname,$lastname){
        echo $firstname;
        //return view('hello.hello5',['firstname' => $firstname],['lastname' => $lastname]);
        return view('hello.hello5',['firstname' => $firstname],['lastname' => $lastname]);
    }
}

