<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SaveController;


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

Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
Route::get('exmp',[ReclamationController::class,'exmp'])->name('reclamations.exmp');

   // Route::get('signin',[AdminController::class,'create'])->name('admin.signin');
    Route::get('register',[SaveController::class,'register'])->name('admin.register');
    Route::post('/admin/save',[SaveController::class, 'save'])->name('admin.save');
   // Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
   Route::put('/reclamations/{id}',[ReclamationController::class, 'updateEtat'])->name('reclamations.updateEtat');
//    Route::get('user-delete/{id}',[UserController::class,'delete'])->name('user.delete');


    //Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
   // Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
   // Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
   
