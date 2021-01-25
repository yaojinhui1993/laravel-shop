<?php

use Moontoast\Math\BigNumber;
use Illuminate\Support\Facades\Route;

if (! function_exists('route_class')) {
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

if (! function_exists('big_number')) {
    function big_number($number, $scale = 2)
    {
        return new BigNumber($number, $scale);
    }
}
