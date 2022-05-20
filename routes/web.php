<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Notifications\ResetPasswordNotification;
use App\Http\Controllers\AdminController;

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




Route::resource('/users',UserController::class);
Route::resource('/admin',AdminController::class);
Route::resource('/reclamations',ReclamationController::class);
Route::resource('/students', StudentController::class);
Route::post('/students/insert_data', 'StudentController@insert');
//export en pdf 
Route::get('/exportpdf',[StudentController::class, 'exportpdf'])->name('exportpdf');
Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin-dashboard', function(){
    
    return view('admin-dashboard');
})->middleware(['auth'])->name('admin-dashboard');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


