<?php

//Route::get( '/home', [SiteController::class, 'Home'] );

use Illuminate\Support\Facades\Route;

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

// Route::get('/user',function(){
//     return view('components.user');
// });

// Route::get('/header',function(){
//     return view('components.header');
// });

// since the view file is inside components file

Route::view('user', 'components.user');   //components.user since the view file is inside components file
Route::view('about', 'components.about');
