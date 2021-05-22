<?php

//Route::get( '/home', [SiteController::class, 'Home'] );

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('member',[memberController::class,'show']);
