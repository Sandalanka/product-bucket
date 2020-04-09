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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/*Route::post('additeam',[
'uses' =>'IteamController@additeam']);*/

Route::post('additeam',[
    'uses' =>'IteamController@additeam'
]);


Route::get('iteam',[
    'uses' =>'IteamController@iteam'
]);

Route::get('deleteiteam/{id}',[
    'uses' =>'IteamController@deleteiteam'
]);


Route::get('edititeam/{id}',[
    'uses' =>'IteamController@edititeam'
]);


