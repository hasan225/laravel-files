<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studyblog;


Route::get('/', function () {
    return view('welcome');
});



Route::get('sb',[studyblog::class,'sb']);
