<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[NewController::class,'index']);
Route::get('/login',[NewController::class,'login']);
Route::post('save',[NewController::class,'validateit']);
Route::get('/form',[NewController::class,'userform']);
Route::post('registerit',[NewController::class,'registerit']);
Route::get('/viewrequest',[NewController::class,'requests']);
Route::get('/finished/{id}/',[NewController::class,'finished']);
Route::get('/addcar',[NewController::class,'addcar']);
Route::get('/dash',[NewController::class,'dash']);
Route::post('carregit',[NewController::class,'carregit']);


// Route::get('/form/{carname}/',[NewController::class,'formwithname']);


