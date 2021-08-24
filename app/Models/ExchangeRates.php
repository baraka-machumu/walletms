<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model
{
    use HasFactory;

    protected $table="exchange_rates";

    public function currencyCodes()
    {
        return $this->belongsTo(CurrencyTypes::class,"currency_code_code","currency_code");
    }

    public function exchangeCurrencyCodes()
    {
        return $this->belongsTo(CurrencyTypes::class,"exchange_currency_code","currency_code");
    }

    public function creators()
    {
        return $this->belongsTo(User::class,"created_by_id","id");
    }
}
