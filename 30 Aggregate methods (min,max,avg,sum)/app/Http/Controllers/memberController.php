<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberController extends Controller
{
    //
    function aggregate(){

    return DB::table('members')->get();


        // 5 min | return DB::table('members')->min('value');
        // 4 max | return DB::table('members')->max('value');
        // 3 count | return DB::table('members')->count();
        // 2 sum | return DB::table('members')->sum('value');
        // 1 avarage | return DB::table('members')->avg('value');
    }
    }
