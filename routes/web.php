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

<<<<<<< HEAD
Route::get('/',[AppController::class, 'welcome'] );
Route::resource('/users',UserController::class);
Route::resource('/reclamations',ReclamationController::class);
Route::resource('/students', StudentController::class);
Route::post('/students/insert_data', 'StudentController@insert');
//export en pdf 
Route::get('/exportpdf',[StudentController::class, 'exportpdf'])->name('exportpdf');
Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('/auth/register',[SaveController::class,'register'])->name('auth.register');
Route::post('/auth/save',[SaveController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/admin-dashboard',function(){
    return view('admin.dashboard');
    
Route::get('/home','HomeController@index')->name('home');

=======
Route::get('/', function () {
    return view('welcome');
>>>>>>> 6e17a8b4b727aece8da783c294e5a177d899bef0
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
