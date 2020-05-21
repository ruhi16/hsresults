<?php

use Illuminate\Http\Request;
use App\User;
use App\DB;
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

Route::get('/test', function(){
    
    $clients = \DB::table('oauth_clients')->get();

    return response(['msg' => $clients]);
});

Route::post('/register','Api\Auth\RegisterController@register');
Route::post('/login','Api\Auth\LoginController@login');
Route::post('/refresh','Api\Auth\LoginController@refresh');



Route::middleware('auth:api')->group(function(){

    Route::get('/user', function (Request $request) {    
        return response([
            'user' => User::all()
        ]);
    });

    Route::post('logout', 'Api\Auth\LoginController@logout');


});
