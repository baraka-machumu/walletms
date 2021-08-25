<?php

namespace App\Http\Controllers;

use App\Models\CurrencyTypes;
use App\Models\ExchangeRates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ExchangeRateController extends Controller
{

    public function viewExchangeRate()
    {
        try {
            $exchanges = ExchangeRates::all();

            $currency_code = CurrencyTypes::all();

            return view('exchange_rate.exchange', compact('exchanges', 'currency_code'));
        }catch (\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function viewCurrencyCodes()
    {
        try {
            $curriencies = CurrencyTypes::all();

            return view('exchange_rate.currency', compact('curriencies'));
        }catch (\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function addExchangeRate(Request $request)
    {
            try{

                $save = new ExchangeRates();
                $save->currency_code_code = $request->currency_code_code;
                $save->exchange_rate = $request->exchange_rate;
                $save->exchange_currency_code = $request->exchange_currency_code;
                $save->created_by_id = Auth::user()->id;
                $save->last_updated_by = Auth::user()->id;
                $save->save();

                if($save==true)
                {
                    return redirect()->back();
                }else{
                    return redirect()->back();
                }

            }catch(\Throwable $e)
            {
                Log::info("message",['ErrorMessage'=>$e->getMessage()]);
            }
    }

    public function deleteExchangeRate(Request $request)
    {
        try{

        }catch(\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function updateExchangeRate(Request $request)
    {
        try{
            if(ExchangeRates::where('id',$request->id)->update([
                'currency_code_code'=>$request->currency_code_code,
                'exchange_rate'=>$request->exchange_rate,
                'exchange_currency_code'=>$request->exchange_currency_code,
                'last_updated_by'=>Auth::user()->id,
            ])==true){
                return redirect()->back();
            }else{
                return redirect()->back();
            }


        }catch (\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function addCurrencyCode(Request $request)
    {
        try{

            $currency = new CurrencyTypes();
            $currency->name = $request->name;
            $currency->currency_code = $request->currency_code;
            $currency->save();

            if($currency==true)
            {
                return redirect()->back();
            }else{
                return redirect()->back();
            }

        }catch (\Throwable $e)
        {
            Log::info('message',['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function editCurrencyCodes($id)
    {
        try{

            $currency_types = CurrencyTypes::query()->where(['id'=>$id])->get()[0];

            return view('exchange_rate.edit_currency_code',compact('currency_types'));


        }catch (\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function editExchangeRates($id)
    {
        try{
            $exchange_rate = ExchangeRates::query()->where(['id'=>$id])->get()[0];

            $currency_code = CurrencyTypes::all();

            return view('exchange_rate.edit_exchange_rate',compact('exchange_rate','currency_code'));

        }catch(\Throwable $e)
        {
            Log::info("message",['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function updateCurrencyCode(Request $request)
    {
        try{
            $currency_types = CurrencyTypes::query()->where(['id',$request->id])->update([
                'name'=>$request->name,
                'currency_code'=>$request->currency_code
            ]);


            if($currency_types == true){
                return redirect()->back();
            }else{
                return redirect()->back();
            }

        }catch(\Throwable $e)
        {
            Log::info('message',['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function deleteCurrencyCode(Request $request)
    {
        try{

        }catch (\Throwable $e)
        {
            Log::info('message',['ErrorMessage'=>$e->getMessage()]);
        }
    }

    public function logExchangeRate($request)
    {
        try{

        }catch (\Throwable $e)
        {
            Log::info('message',['ErrorMessage'=>$e->getMessage()]);
        }
    }

}
