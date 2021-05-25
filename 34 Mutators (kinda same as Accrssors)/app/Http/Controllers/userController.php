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
        $userModel=new userModel;
        $userModel->name="hasan";
        $userModel->email="hasan@gamil.com";
        $userModel->address="noakhali";
        $userModel->save();

    }
}
