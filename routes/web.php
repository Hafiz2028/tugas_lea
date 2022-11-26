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

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/data',[App\Http\Controllers\UserController::class,'index'])->name('data-user');
Route::get('/tambah-data',[App\Http\Controllers\UserController::class,'create'])->name('create-data');
Route::post('/simpan-data',[App\Http\Controllers\UserController::class,'store'])->name('simpan-data');
Route::get('/edit-data/{id}',[App\Http\Controllers\UserController::class,'edit'])->name('edit-data');
Route::post('/update-data/{id}',[App\Http\Controllers\UserController::class,'update'])->name('update-data');
Route::get('/delete-data/{id}',[App\Http\Controllers\UserController::class,'destroy'])->name('delete-data');

Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/home');
});