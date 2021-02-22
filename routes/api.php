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

Route::get('/verify_email/{email_link}', 'Api\Auth\RegisterController@verify_email');
Route::get('/verify_email_otp/{email_otp}', 'Api\Auth\RegisterController@verify_email_otp');



// Route::get('/members', 'Api\Auth\MemberController@index');
// Route::get('/members/{id}', 'Api\Auth\MemberController@show');




Route::resource('members', 'Api\Auth\MemberController', ['only' => ['index', 'show']]);
// Route::resource('photo', 'PhotoController', ['except' => ['create', 'store', 'update', 'destroy']]);



Route::post('members/{id}/loanpayments', 'Api\LoanpaymentController@monthPayments');
Route::put ('members/{id}/loanpayments', 'Api\LoanpaymentController@monthUpdate');
Route::delete ('members/{id}/loanpayments', 'Api\LoanpaymentController@monthDelete');


Route::get ('members/{id}/loanpayments', 'Api\LoanpaymentController@monthInitialisation');    


Route::get('/allusers', function (Request $request){
    $users = User::all();

    return response()->json([
        'users' => $users,
    ]);
});


Route::middleware('auth:api')->group(function(){

    //Route::get ('member/{id}/loanpayments', 'Api\LoanpaymentController@monthInitialisation');
    
    Route::resource('member', 'Api\Auth\MemberController', ['only' => ['index', 'show']]);


    Route::get('/user', function (Request $request){
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
