<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    //
    function show(){
        $data= member::all();
        return view('list',['members'=>$data]);
    }
}
