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
Route::get('lapa/{idlapa}','API\TaskController@getlapangana');
// http://127.0.0.1:8000/api/lapa/{lapa}
Route::get('lapb/{idlapb}','API\TaskController@getlapanganb');
// http://127.0.0.1:8000/api/lapb/{lapb}
Route::get('detail/{idbooking}','API\TaskController@getdetailbooking');
// http://127.0.0.1:8000/api/detail/{idbooking}
Route::get('dashboard/{idcustomer}','API\TaskController@getdashboard');
// http://127.0.0.1:8000/api/dashboard/{idcustomer}
Route::post('password','API\TaskController@postPassword');
// http://127.0.0.1:8000/api/password
Route::post('login','API\TaskController@postLogin');
// http://127.0.0.1:8000/api/login
Route::post('password','API\TaskController@postPassword');
// http://127.0.0.1:8000/api/password