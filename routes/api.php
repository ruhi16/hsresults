<?php

use Illuminate\Http\Request;
use App\User;
use App\Loanassign;
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

Route::get('/test', 'Api\TestController@index');

Route::post('/register','Api\Auth\RegisterController@register');
Route::post('/login','Api\Auth\LoginController@login');
Route::post('/refresh','Api\Auth\LoginController@refresh');



Route::middleware('auth:api')->group(function(){

    Route::get('/members', 'Api\Auth\MemberController@index');


    Route::get('/user', function (Request $request) {    
        $user = auth()->user();


        

      
        $member = $user->member;
        
        $loanassigns = Loanassign::where('member_id', $member->id)->get();



        $payments = [];

        foreach($loanassigns as $loanassign){
            $payments = $loanassign->loanpayments;
            
            

        }

        
        $thfundstatus = $member->thfundmasters;
        $thfundcollection = $member->thfundmonthcollections;


        return response()->json([
            'user' => $member,
            'loanassign'    => $loanassigns,
        ]);



        // return response([
        //     'user'  =>  $user->member, 
        //     'loanassigns'   => $loanassigns,
            
        // ]);
    });

    Route::post('logout', 'Api\Auth\LoginController@logout');
    


});
