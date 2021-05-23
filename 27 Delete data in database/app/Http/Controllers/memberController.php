<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\member;

class memberController extends Controller
{
    //
    function list(){
        $data=member::all();
             return view('list',['members'=>$data]);
    }

    function delete($id){
        $data=member::find($id);
        $data->delete();
        return redirect('member')->with('success','post was removed');


    }

    }

