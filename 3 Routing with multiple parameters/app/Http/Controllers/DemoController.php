<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   function myName($firstName,$middleName,$lastName){
       return "First Name: ". $firstName ." Middle Name :" .$middleName . " Last Name :" .$lastName;
   }
}
