<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studyblog extends Controller
{
    //
    function sb(){
        return DB::connection('mysql2')->table('friends')->get();
    }
}
