<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

/** 
* Valida si la ruta activa esta en uso
* @param string $route
* @param string #class
* @return string
*/
function isRouteActive($route, $class = 'active')
{
    if(Str::contains(Route::currentRouteName(),'admin.user') ){
        return $class;
    }

    return null;
}