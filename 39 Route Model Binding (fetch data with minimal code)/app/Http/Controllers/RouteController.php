<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class RouteController extends Controller
{
    //
    function routeData(device $key){
        return $key;
    }
}
