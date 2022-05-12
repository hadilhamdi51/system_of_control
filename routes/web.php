<?php
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MainController;
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
Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');