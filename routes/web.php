<?php

use App\Controllers\BlogController;
use App\Controllers\HomeController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
// $routes->add('404', new Route('/', ['_controller' => [new ErrorController(), 'code404']]));
// $routes->add('500', new Route('/', ['_controller' => [new ErrorController(), 'code500']]));

$routes->add('home', new Route('/', [
	'_controller' => [new HomeController(), 'index'],
]));

$routes->add('blog.index', new Route('/blog', [
	'title' => 'Blog',
	'_controller' => [new BlogController(), 'index'],
]));

$routes->add('blog.show', new Route('/blog/{slug}', [
	'title' => 'World',
	'_controller' => [new BlogController(), 'show'],
]));

return $routes;