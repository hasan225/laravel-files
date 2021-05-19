<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    //
    function index(){
       $item= Http::get('https://reqres.in/api/users?page=1');
       return view('users',['item'=>$item['data']]);
    }
}
