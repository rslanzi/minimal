<?php

require_once __DIR__.'/../vendor/autoload.php';

use Minimal\Events\StringResponseListener;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\EventListener\ResponseListener;

$container = include __DIR__.'/../src/container.php';
$container->register('listener.string_response', StringResponseListener::class);
$container->register('listener.response', ResponseListener::class)->setArguments(['UTF-8']);
$container->getDefinition('dispatcher')->addMethodCall('addSubscriber', [new Reference('listener.string_response')]);
$container->setParameter('routes', include __DIR__.'/../routes/web.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$request = Request::createFromGlobals();

$response = $container->get('framework')->handle($request);

$response->send();