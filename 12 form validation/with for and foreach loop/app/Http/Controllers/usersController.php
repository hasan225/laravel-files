<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function getData(request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        return $req->input();
    }
};
