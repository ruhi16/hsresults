<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;



use Carbon\Carbon;
use App\User;



class LoginController extends Controller
{
    private $client;
    public function __construct(){
        $this->client = Client::find(2);
    }

    public function login(Request $request){

        $this->validate($request, [            
            'email'     =>  'required',
            'password'  =>  'required'
        ]);

        $params = [
            "grant_type"    =>  "password",
            "client_id"     =>  $this->client->id,
            "client_secret" =>  $this->client->secret,
            "username"      =>  request('email'),
            "passowrd"      =>  request('password'),
            "scope"         =>  ""
        ];


        $user = auth()->user();// \Auth::user();
        Mail::to('email@email.com')->send(new WelcomeMail($user));

        $request->request->add($params);        
        $proxy = Request::create('oauth/token', 'POST');  
        return Route::dispatch($proxy);

    }


    public function refresh(Request $request){
        $this->validate($request, [
            'refresh_token'    => 'required'
        ]);

        $params = [
            "grant_type"    =>  "refresh_token",
            "client_id"     =>  $this->client->id,
            "client_secret" =>  $this->client->secret,
            "username"      =>  request('email'),
            "passowrd"      =>  request('password'),            
        ];

        $request->request->add($params);        
        $proxy = Request::create('oauth/token', 'POST');  
        return Route::dispatch($proxy);
        
    }



    public function logout(Request $request){
        $accessToken = Auth::user()->token();
        

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);
        
        $accessToken->revoke();

        return response()->json([
            'message'   =>  'user logged out successfully'
        ]);
    }
}
