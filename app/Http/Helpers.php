<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if(!function_exists('areActiveRoutesHome')) {
    function areActiveRoutesHome(Array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() == $route) return $output;
        }
    }
}


if(!function_exists('limitText')) {
    // limit long text
    function limitText($text, $limit = 100) {
        return Str::limit($text, $limit, '...');
    }
}
