<?php


use App\Http\Controllers\Metadata202201Controller;
use App\Http\Controllers\Metadata202202Controller;
use App\Http\Controllers\Metadata202203Controller;
use App\Http\Controllers\Metadata204Controller;
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
})->name('home');
// 2021

// 2022
Route::get('/metadata1-22',[Metadata202201Controller::class,'index']);
Route::get('/metadata2-22',[Metadata202202Controller::class,'index']);
Route::get('/metadata3-22',[Metadata202203Controller::class,'index']);
Route::get('/metadata204',[Metadata204Controller::class,'index']);
// 2023
