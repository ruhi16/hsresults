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

class RegisterController extends Controller
{
    private $client;
    public function __construct(){
        $this->client = Client::find(2);
    }

    public function register(Request $request){

        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email|unique:users,email',
            'password'  =>  'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name'  =>  request('name'),
            'email' =>  request('email'),
            'password'  =>  bcrypt('password')
        ]);

        $params = [
            "grant_type"    =>  "password",
            "client_id"     =>  $this->client->id,
            "client_secret" =>  $this->client->secret,
            "username"      =>  request('email'),
            "passowrd"      =>  request('password'),
            
        ];
        
        $request->request->add($params);        
        $proxy = Request::create('oauth/token', 'POST'); 
        
        //send email for otp
        $user = User::where('email', request('email'))->first();  
        if($user != null){      
            Mail::to(request('email'))->send(new WelcomeMail($user));
        }
        
        return Route::dispatch($proxy);



        // $credentials = request(['email', 'password']);
        // if(! \Auth::attempt($credentials))
        //     return response()->json([
        //         'message' => 'Unauthorized'
        //     ], 401);

        // $user = $request->user();
        // $tokenResult = $user->createToken('Personal Access Token');
        // $token = $tokenResult->token;

        
        // $token->save();
        // return response()->json([
        //     'token_type' => 'Bearer',
        //     'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
        //     'access_token' => $tokenResult->accessToken
        // ]);
        

        
        // $res = app()->handle($proxy);        
        // $responseBody = json_decode($res->getContent()); // convert to json object        
        // return response()->json(['success' => $responseBody], $res->getStatusCode());
        // return $res;
        // return response()->json(['msg' => 'This is from RegisterController@register']);
    }












    // public function login(Request $request) {
    //     if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
    //         $user = Auth::user();
    
    //          if(Auth::check()) {  // check whether user exist
    //            $req = Request::create('/oauth/token', 'POST',[
    //                      'grant_type' => 'password',
    //                      'client_id' => 2,
    //                      'client_secret' => 'WDv6wrY9Tf9HuixaiQjDWGy7yBqEG1IrmsLucAUI',
    //                      'username' => request('email'),
    //                      'password' => request('password'),
    //                      'scope' => '' 
    //                    ]);   
    //                    $res = app()->handle($req);
    //                    $responseBody = json_decode($res->getContent()); // convert to json object
    //            return response()->json(['success' => $responseBody], $res->getStatusCode());
    
    //          } else {
    //             return response()->json(['error' => 'Not logged in '], 401);
    //           }
    
    //     } else {
    //         return response()->json(['error' => 'Authentication failed '], 401);
    //     }
    // }
}
