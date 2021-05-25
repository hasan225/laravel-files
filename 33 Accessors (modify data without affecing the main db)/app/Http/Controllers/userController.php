<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\userModel;

class userController extends Controller
{
    //
    function getdata(){

      //  return DB::table('users_2')->get();
        return userModel::all();

    }
}
