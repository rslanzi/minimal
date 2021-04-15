<?php

use Rslanzi\Minimal\Env;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
    function route(string $route, array $parameters = [], int $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH): string
    {
//        return $container->get('router')->generate($route, $parameters, $referenceType);
        return '/'.$route;
    }
}

/**
 * @todo
 */
if (! function_exists('csrf_token')) {
    function csrf_token()
    {
    }
}

/**
 * @todo
 */
if (! function_exists('__')) {
    function __($text)
    {
        return $text;
    }
}

if (! function_exists('dd')) {
    function dd($value)
    {
        return exit(dump($value));
    }
}
