<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    //
    function viewLoad(){
        return view('components.user',['user'=>'rakib']);
    }
}
