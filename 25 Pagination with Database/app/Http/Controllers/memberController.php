<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    //
    function show(){
        $data= member::paginate(5);
        return view('list',['members'=>$data]);
    }
}
