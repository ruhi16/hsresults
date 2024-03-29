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

        $request->request->add($params);        
        $proxy = Request::create('oauth/token', 'POST');  


        $user = User::where('email', request('email'))->first();  
        if($user != null){ 
            //$user->email_verified_link = $this->getRandomString(20);
            $user->email_otp = $this->getRandomDigits(6);
            $user->save();     
            Mail::to(request('email'))->send(new WelcomeMail($user));
        }

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



    public function getRandomDigits($n) {
        $characters = '0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    } 


}
