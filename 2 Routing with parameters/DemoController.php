<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   function myName($nameValue){
       return $nameValue;
   }
}
