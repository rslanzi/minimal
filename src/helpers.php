<?php

use Minimal\Env;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return Env::get($key, $default);
    }
}

/** 
 * @todo 
 */
if (! function_exists('route')) {
    function route($routeName, $routeParams = []) {
        return '/' . $routeName;
    }
}

/** 
 * @todo 
 */
if (! function_exists('csrf_token')) {
    function csrf_token() {

    }
}

/** 
 * @todo 
 */
if (! function_exists('__')) {
    function __($text) {
        return $text;
    }
}