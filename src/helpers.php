<?php

use Akunting\Money\Currency;
use Akunting\Money\Money;

if (!function_exists('money')) {
    /**
     * Instance of money class.
     *
     * @param mixed  $amount
     * @param string $currency
     * @param bool   $convert
     *
     * @return \Akunting\Money\Money
     */
    function money($amount, $currency = 'USD', $convert = false)
    {
        return new Money($amount, currency($currency), $convert);
    }
}

if (!function_exists('currency')) {
    /**
     * Instance of currency class.
     *
     * @param string $currency
     *
     * @return \Akunting\Money\Currency
     */
    function currency($currency)
    {
        return new Currency($currency);
    }
}
