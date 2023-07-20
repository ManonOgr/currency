<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Currency::create(["currencies_code" =>"ARS" , "currencies_name" => "Argentine Peso" , "currencies_symbol" => "$" ]);
        Currency::create(["currencies_code" =>"AUD" , "currencies_name" => "Australian Dollar" , "currencies_symbol" => "$" ]);
        Currency::create(["currencies_code" =>"CAD" , "currencies_name" => "Canadian Dollar" , "currencies_symbol" => "$" ]);
        Currency::create(["currencies_code" =>"CHF" , "currencies_name" => "Swiss Franc" , "currencies_symbol" => "CHF" ]);
        Currency::create(["currencies_code" =>"CNY" , "currencies_name" => "Yuan Renminbi" , "currencies_symbol" => "¥" ]);
        Currency::create(["currencies_code" =>"EUR" , "currencies_name" => "Euro" , "currencies_symbol" => "€" ]);
        Currency::create(["currencies_code" =>"JPY" , "currencies_name" => "Yen" , "currencies_symbol" => "¥" ]);
        Currency::create(["currencies_code" =>"USD" , "currencies_name" => "US Dollar" , "currencies_symbol" => "$" ]);
    }
}
