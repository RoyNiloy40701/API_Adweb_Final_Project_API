<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;

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

//Product
Route::get('/product/all',[ProductController::class,'getAll']);
Route::get('/product/get/{id}',[ProductController::class,'get']);
Route::post('/product/add',[ProductController::class,'addProduct']);
Route::put('/product/update/{id}',[ProductController::class,'updateProduct']);
Route::post('/product/delete/{id}',[ProductController::class,'deleteProduct']);

//Employee
Route::get('/employee/all',[EmployeeController::class,'getAll']);
Route::get('/employee/get/{id}',[EmployeeController::class,'get']);
Route::post('/employee/add',[EmployeeController::class,'addEmployee']);
Route::put('/employee/update/{id}',[EmployeeController::class,'updateEmployee']);
Route::post('/employee/delete/{id}',[EmployeeController::class,'deleteEmployee']);
