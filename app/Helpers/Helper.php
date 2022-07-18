<?php

use AmrShawky\LaravelCurrency\Facade\Currency;

class Helper
{
    public static function converClass($amount)
    {
        return Currency::convert()
            ->from('PHP')
            ->to('USD')
            ->amount($amount)
            ->get();
    }
}
