<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class addMember extends Controller
{
    //
    function add(Request $req){
       $data=$req->input('email');
         $req->session()->flash('email',$data);
         return  redirect('add');
    }
}
