<?php

use Illuminate\Http\Request;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/userapi','ApiController@user');

Route::get('/usercart/{id}','ApiController@getById');
Route::post('/adduserbyapi','ApiController@saveuser')->name('useradd');
Route::put('/upadteuser/{id}','ApiController@userUpadate');
Route::delete('/deleteuser/{user}','ApiController@userDelete');

