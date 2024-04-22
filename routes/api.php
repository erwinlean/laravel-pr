<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
/*
| API Routes
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/ 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('category','App\Http\Controllers\categoryController@getCategory');

Route::get('category/{id}','App\Http\Controllers\categoryController@getCategoryById');

Route::post('postCategory', 'App\Http\Controllers\categoryController@postCategory');

Route::put('updateCategory/{id}', 'App\Http\Controllers\categoryController@updateCategory');

Route::delete('deleteCategory/{id}', 'App\Http\Controllers\categoryController@deleteCategory');