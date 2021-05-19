<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class userscontroller extends Controller
{
    //
    function viewLoad(){
        $data=['joy', 'bijoy','jui'];
        return view('components.user',['user'=>$data]);
    }
}
