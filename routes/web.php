<?php
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
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

Route::get('/',[AppController::class, 'welcome'] );
Route::resource('/users',UserController::class);
Route::resource('/reclamations',ReclamationController::class);