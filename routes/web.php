<?php

use App\Http\Controllers\Indikator202201Controller;
use App\Http\Controllers\Metadata202202Controller;
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
Route::get('/metadata1-22',[Indikator202201Controller::class,'index']);
Route::get('/metadata2-22',[Metadata202202Controller::class,'index']);
// 2023
