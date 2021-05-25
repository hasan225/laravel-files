<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
use App\Models\employee;

class userController extends Controller
{
    //
    function getData(){
        return employee::find(2)->getDevices;
    }
}
