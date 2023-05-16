<?php

use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('school/index', [SchoolController::class, 'index'])->name('school.index');
Route::get('school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('school/store', [SchoolController::class, 'store'])->name('school.store');
Route::delete('school/delete',[SchoolController::class, 'delete'] )->name('school.delete');
