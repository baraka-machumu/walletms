<?php

namespace App\Http\Controllers;

use App\Models\CurrencyTypes;
use App\Models\ExchangeRates;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{

    public function viewExchangeRate()
    {
        $exchanges = ExchangeRates::all();

        return view('exchange_rate.currency',compact('exchanges'));
    }

    public function viewCurrencyCodes()
    {
        $curriencies = CurrencyTypes::all();

        return view('exchange_rate.currency',compact('curriencies'));
    }

    public function updateExchangeRate()
    {
        try{

        }catch (\Throwable $e)
        {

        }
    }

    public function addCurrencyCode()
    {
        try{

        }catch (\Throwable $e)
        {

        }
    }

    public function logExchangeRate()
    {
        try{

        }catch (\Throwable $e)
        {

        }
    }

}
