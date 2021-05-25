<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    //
    function show(){
        return DB::table('employee')->join('company','employee.id',"=",'company.employee_id')
        //->select('employee.*')
        ->where('company.name','google')
        ->get();
    }
}
