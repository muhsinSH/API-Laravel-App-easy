<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route of  Get all Emoploy
Route::get('Employs',[EmployController::class,'index']);


//Route of  Get one Emoploy
Route::get('employ/{id}',[EmployController::class,'show']);

//Route of  update one spacific Emoploy
Route::put('update/{id}',[EmployController::class,'update']);


//Route of  update one delete Emoploy
Route::delete('delete/{id}',[EmployController::class,'destroy']);

////Route of  add  new  Emoploy

Route::post('add',[EmployController::class,'addEmployee']);

Route::post('Registere',[RegisterController::class,'Register']);
Route::post('login',[RegisterController::class,'login']);







