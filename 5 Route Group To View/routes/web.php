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

Route::group( ['prefix' => 'account'], function () {

    Route::get( '/signup', function () {

        return "signup";
    } );
    Route::get( '/login', function () {
        return "login";
    } );
    Route::get( '/logout', function () {

        return "logout";
    } );
    Route::get( '/updateProfile', function () {

        return "updateProfile";
    } );

    Route::get( '/', function () {

        return "YOu on Account";
    } );
} );


Route::get('/',function(){
    return "You are Home";
});
