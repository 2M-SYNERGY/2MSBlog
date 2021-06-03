<?php

use Illuminate\Support\Facades\Route;

if(!function_exists('areActiveRoutesHome')) {
    function areActiveRoutesHome(Array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() == $route) return $output;
        }
    }
}
