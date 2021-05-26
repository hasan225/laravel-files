<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\company;
use App\Models\friend;

class studyblog extends Controller
{
    //
    function sb(){
        // return DB::connection('mysql2')->table('friends')->get();
        return friend::all();
    }
}
