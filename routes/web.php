<?php

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

Route::get('/', function () {
    return view('welcome');
    return" hello hadil hamdi how are you didi";
});
Route::get('/testmalek', function () {
    return view('Malek Kraimia');

});
Route::get('/test', function () {
    return view('hi ouma ben amor');
});
