<?php

require_once __DIR__.'/../vendor/autoload.php';

use Rslanzi\Minimal\Events\StringResponseListener;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\EventListener\ResponseListener;

$container = include __DIR__.'/../src/container.php';
$container->setParameter('routes', include __DIR__.'/../routes/web.php');
$container->register('listener.string_response', StringResponseListener::class);
$container->register('listener.response', ResponseListener::class)->setArguments(['UTF-8']);
$container->getDefinition('dispatcher')->addMethodCall('addSubscriber', [new Reference('listener.string_response')]);

$request = Request::createFromGlobals();

$response = $container->get('framework')->handle($request);
$response->send();
