<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException; 
use JWTAuth;

class ApiAuthController extends Controller
{
	public function authenticate(){

		$credentials=request()->only('email','password');
		try{

			$token=JWTAuth::attempt($credentials);
			if(!$token){
				return response()->json(['error'=>'invalid_credentials'],401);
			}
		}
		catch(JwtException $e){
			return response()->json(['error'=>'Something went wrong'],500);

		}
		return response()->json(['token'=> $token],200);


    
		}
}
