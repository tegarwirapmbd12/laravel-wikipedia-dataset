<?php

use App\Http\Controllers\Indikator22Controller;
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
// 2021

// 2022
// INDIKATOR
Route::get('/metadata1-22',[Indikator22Controller::class,'index']);
// 2023
