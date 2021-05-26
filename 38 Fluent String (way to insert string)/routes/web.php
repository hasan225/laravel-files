<?php

//Route::get( '/home', [SiteController::class, 'Home'] );

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

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


//  FLUENT STRINGS

$data= "hi let's learn laravel";

$data=Str::of($data)->ucfirst($data)
                    ->replaceFirst('Hi','hello',$data)
                    ->camel($data);



echo $data;

 //   OLD WAY
 // $data=Str::ucfirst($data);
 // $data=Str::replaceFirst("Hi","Hello",$data);
 // $data=Str::camel($data);


Route::get('/', function () {
    return view('welcome');
});




