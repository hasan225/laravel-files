<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function getData(request $req){
        $req->validate([
            'email'=>'required | min:10',
            'password'=>'required | min:10'
        ]);
        return $req->input();
    }
};
