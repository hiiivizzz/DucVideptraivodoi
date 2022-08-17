<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

/*Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home', function(){
    return  view('home');
});*/
Route::get('/', 'Homecontroller@index');
//USERS

Route::get('san-pham', 'Homecontroller@post')->name('san-pham');
Route::get('upload', 'Homecontroller@upload')->name('upload');
Route::post('handle', 'Homecontroller@handle')->name('handle');

Route::get('test', 'Homecontroller@lol');
Route::get('chill', 'Homecontroller@chill');
Route::get('download-image', 'Homecontroller@downloadimage')->name('download-image');
Route::get('downloadimage', 'Homecontroller@downloadimage2')->name('downloadimage');
//Route::get('Them-san-pham', 'Homecontroller@getadd');
//Route::post('Them-san-pham', 'Homecontroller@postadd');