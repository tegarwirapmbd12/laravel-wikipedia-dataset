<?php

use App\Http\Controllers\Metadata201Controller;
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
Route::get('/coba-coba', function () {
    return view('coba-coba');
});
// 2021

// 2022
Route::get('/metadata201',[Metadata201Controller::class,'index']);
Route::get('/metadata202',[Metadata201Controller::class,'index2']);
Route::get('/metadata203',[Metadata201Controller::class,'index3']);
Route::get('/metadata204',[Metadata201Controller::class,'index4']);
Route::get('/metadata205',[Metadata201Controller::class,'index5']);
Route::get('/metadata206',[Metadata201Controller::class,'index6']);
Route::get('/metadata207',[Metadata201Controller::class,'index7']);
Route::get('/metadata208',[Metadata201Controller::class,'index8']);
Route::get('/metadata209',[Metadata201Controller::class,'index9']);
Route::get('/metadata210',[Metadata201Controller::class,'index10']);
Route::get('/metadata211',[Metadata201Controller::class,'index11']);
Route::get('/metadata212',[Metadata201Controller::class,'index12']);
Route::get('/metadata213',[Metadata201Controller::class,'index13']);
Route::get('/metadata214',[Metadata201Controller::class,'index14']);
Route::get('/metadata215',[Metadata201Controller::class,'index15']);
Route::get('/metadata216',[Metadata201Controller::class,'index16']);
Route::get('/metadata217',[Metadata201Controller::class,'index17']);
Route::get('/metadata218',[Metadata201Controller::class,'index18']);
Route::get('/metadata219',[Metadata201Controller::class,'index19']);
Route::get('/metadata220',[Metadata201Controller::class,'index20']);
Route::get('/metadata221',[Metadata201Controller::class,'index21']);
Route::get('/metadata222',[Metadata201Controller::class,'index22']);
Route::get('/metadata223',[Metadata201Controller::class,'index23']);
Route::get('/metadata224',[Metadata201Controller::class,'index24']);
Route::get('/metadata225',[Metadata201Controller::class,'index25']);
// 2023
