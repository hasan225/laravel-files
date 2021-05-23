<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class members extends Controller
{
    //
    function dbOperations(){

                   return DB::table( 'members' )->get();

     //7 delete function  return DB::table('members')->where('id',22)
                        // ->delete();


     //6 update function return DB::table('members')->where('id',22)
                        // ->update(
                        //     [
                        //         'name'=>'bijoy',
                        //         'email'=>'bijoy@gmail.com',
                        //         'address'=>'begumgonj'
                        //     ]
                        // );


      //5 insert function  return DB::table('members')->insert(
                        //     [
                        //         'name'=>'bijoy',
                        //         'email'=>'bijoy@test.com',
                        //         'address'=>'begumgonj'
                        //     ]
                        // );


      //4 count function  return DB::table('members')->count();


      //3 find function   return (array) DB::table('members')->find(4);


     //2 where function   return DB::table( 'members' )
                        // ->where('name','saiful alom')
                        // ->get();


    //1 get function     return DB::table( 'members' )->get();
    }
}
