<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }


        //Create token
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                    'response_code' => '91',
                ], 400);
            }
        } catch (JWTException $e) {

            Log::info("Log info for token",["context"=>$e->getMessage()]);

            return response()->json([
                'message' => 'Could not generate token',
                'response_code'=>'10'
            ], 200);
        }

        //Token created, return with success response and jwt token
        return response()->json([
            'message' => "token retrieved",
            'response_code'=>"11",
            'token' => $token,
        ]);
    }

    public function getExchangeRate(Request $request)
    {
        try{

            $exchange_rate = ExchangeRates::query()->where(['currency_code_code'=>$request->currency_code_code,'exchange_currency_code'=>$request->exchange_currency_code])->get();

            return $exchange_rate;

        }catch (\Throwable $e)
        {
            Log::info("message",["ApiErrorMessage"=>$e->getMessage()]);
        }
    }

    public function getExchangeRates()
    {
        try{

            $exchange_rates = ExchangeRates::all();

            return $exchange_rates;

        }catch(\Exception $e)
        {
            Log::info('message',['ApiErrorMessage'=>$e->getMessage()]);
        }
    }
}
