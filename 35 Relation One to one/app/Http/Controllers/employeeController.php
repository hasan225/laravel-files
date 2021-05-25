<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\company;
class employeeController extends Controller
{
    //
    function getdata(){
        return employee::find(1)->getCompany;
    }
}
