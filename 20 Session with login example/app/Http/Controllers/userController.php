<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
 function getData(Request $req){
      $data= $req->input();
      $req->session()->put('email',$data['email']);

     return redirect('profile');

 }

}
