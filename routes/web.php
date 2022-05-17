<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::resource('/reclamations',ReclamationController::class);
Route::resource('/students', StudentController::class);
Route::post('/students/insert_data', 'StudentController@insert');
//export en pdf 
Route::get('/exportpdf',[StudentController::class, 'exportpdf'])->name('exportpdf');
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


