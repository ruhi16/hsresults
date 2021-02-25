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
use App\Member;

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
            $user->email_verified_link = $this->getRandomString(20);
            $user->email_otp = $this->getRandomDigits(6);
            $user->save();
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


    public function verify_email(Request $request, $email_link){
        $user = User::where('email_verified_link', $email_link)->first();
        

        if( $user ){
            $user->email_verified_link = null;
            $user->email_is_verified = true;
            $user->save();

            return response()->json([
                'message'  => 'Email Verified Successfully!!! Thank you.'                
            ]);
        }else {
            return response()->json([
                'message'  => 'Already Your Email Is Verified Successfully!!! Thank you.'                
            ]);
        }
    }


    public function verify_email_otp(Request $request, $email_otp){
        $user = User::where('email_otp', $email_otp)->first();
        

        if( $user ){
            $user->email_otp = null;
            $user->email_otp_is_verified = true;
            $user->save();

            return response()->json([
                'message'  => 'Email OTP Verified Successfully!!! Thank you.'                
            ],200);
        }else {
            return response()->json([
                'message'  => 'Already Your Email OTP Is Verified Successfully!!! Thank you.'                
            ],200);
        }
    }



    
    public function link_membership(Request $request, $security_pin){
        $member = Member::where('security_pin',$security_pin)->first();
        
        if($member){
            $member->user_id = Auth::user()->id;
            $member->save();
            return response()->json([
                'member'=>$member,
                'message' => 'User Link with Membership Info Successfully. '
            ], 200);
        }else{
            return response()->json(['message' => 'Membership Info Not Found! '], 200);
        }


    }







    private function getRandomString($n) { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
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
